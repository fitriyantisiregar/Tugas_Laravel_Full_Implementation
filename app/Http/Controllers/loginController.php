<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }

    if (Auth::attempt($credentials)) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->back()->withInput()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::logout(); // Logout pengguna

        // Redirect pengguna ke halaman login setelah logout
        return redirect()->route('login');
    }
}

}
