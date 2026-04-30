<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::any("/login",[AuthController::class, "login"])->name("login");
Route::any("/register",[AuthController::class, "register"])->name("register");






Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
