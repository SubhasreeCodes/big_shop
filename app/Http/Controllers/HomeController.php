<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend/home');
    }

    public function login(Request $request)
    {
        return view('frontend/auth/login');
    }

    public function register(Request $request)
    {
        return view('frontend/auth/register');
    }

    public function forget_password(Request $request)
    {
        return view('frontend/auth/forget_password');
    }

    public function reset_password(Request $request)
    {
        return view('frontend/auth/reset_password');
    }

    public function my_account(Request $request)
    {
        return view('frontend/auth/my_account');
    }
}
