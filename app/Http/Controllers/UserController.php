<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user.dashboard', compact('user'));
    }

    public function exportData()
    {
        // Logika untuk mengekspor data pengguna
    }
}
