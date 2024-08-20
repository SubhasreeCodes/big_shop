<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
Route::get('/forget_password',[AuthController::class,'forget_password'])->name('home.forget_password');
Route::get('/home',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');
Route::get('/register',[HomeController::class,'register'])->name('home.register');