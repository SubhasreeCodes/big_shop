<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

Route::get('/forget_password',[AuthController::class,'forget_password'])->name('home.forget_password');

Route::get('/login',[AuthController::class,'login'])->name('home.login');

Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [AuthController::class, 'logout'])->name('home.logout');

Route::post('/store', [AuthController::class,'store'])->name('store');

Route::get('/register',[AuthController::class,'register'])->name('home.register');

Route::get('/reset_password',[AuthController::class,'reset_password'])->name('home.reset_password');

Route::get('/my_account',[AuthController::class,'my_account'])->name('home.my_account');

Route::get('/page_terms',[AuthController::class,'page_terms'])->name('home.page_terms');

Route::get('/privacy_policy',[AuthController::class,'privacy_policy'])->name('home.privacy_policy');

Route::get('/purchase_guide',[AuthController::class,'purchase_guide'])->name('home.purchase_guide');

Route::get('/about',[AuthController::class,'about'])->name('home.about');

Route::get('/error_page',[AuthController::class,'error_page'])->name('home.error_page');

Route::post('/send-register-mail', [AuthController::class, 'sendRegisterMail']);

//------------------------------------------------------------------------------------------------------------------

use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home.index');

