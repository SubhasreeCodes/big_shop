<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend/home');
    }

    public function login(Request $request)
    {
        return view('frontend/auth/login');
    }

    public function authenticate(Request $request)
    {

        // dd($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        
        $password = $request->input('password');

        if (User::where('email', $email)->exists()) 
        {
            $user = User::where('email', $email)->first();
            
            Auth::login($user);        

            return redirect('/');
        }
        
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email  or password']);
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
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

    public function page_terms(Request $request)
    {
        return view('frontend/auth/page_terms');
    }

    public function privacy_policy(Request $request)
    {
        return view('frontend/auth/privacy_policy');
    }

    public function purchase_guide(Request $request)
    {
        return view('frontend/auth/purchase_guide');
    }

    public function about(Request $request)
    {
        return view('frontend/auth/about');
    }

    public function error_page(Request $request)
    {
        return view('frontend/error/error_page');
    }
}
