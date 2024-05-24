<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Lakukan proses otentikasi pengguna
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Lakukan proses registrasi pengguna
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
