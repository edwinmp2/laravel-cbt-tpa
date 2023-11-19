<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SoalController;

Route::get('/', function () {
    return view('pages.auth.login', ['type_menu' => '']);
});

//route midleware group
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.dashboard', ['type_menu' => '']);
    })->name('home');
    Route::resource('user', UserController::class);
    Route::resource('soal', SoalController::class);
});