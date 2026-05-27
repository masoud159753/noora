<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;

Route::group(['middleware' => 'guest'], function () {

    Route::any("/login",[AuthController::class, "login"])->name("login");
    Route::any("/register",[AuthController::class, "register"])->name("register");
    Route::any("/checkcode",[AuthController::class, "checkcode"])->name("checkcode");

});

Route::group(['middleware' => 'auth'],function (){

    Route::any("/dashboard",[DashController::class, "dashboard"])->name("dashboard");
    Route::get("/accounts",[DashController::class, "accounts"])->name("accounts");

    Route::get("/transactions",[DashController::class, "transactions"])->name("transactions");
});






Route::get('/', function () {
    return view('welcome');
});
//
//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
