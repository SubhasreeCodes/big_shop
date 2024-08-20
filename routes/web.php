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
Route::get('/forget_password',[HomeController::class,'forget_password'])->name('home.forget_password');
Route::get('/reset_password',[HomeController::class,'reset_password'])->name('home.reset_password');
Route::get('/my_account',[HomeController::class,'my_account'])->name('home.my_account');
Route::get('/page_terms',[HomeController::class,'page_terms'])->name('home.page_terms');
Route::get('/privacy_policy',[HomeController::class,'privacy_policy'])->name('home.privacy_policy');
Route::get('/purchase_guide',[HomeController::class,'purchase_guide'])->name('home.purchase_guide');
Route::get('/about',[HomeController::class,'about'])->name('home.about');

