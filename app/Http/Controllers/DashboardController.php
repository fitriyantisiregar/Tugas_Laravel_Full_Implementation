<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    if (!$user) {
        return redirect()->route('login');
    }
    return view('dashboard', compact('user'));

    public function exportData()
    {
        $dataToExport = User::all();
    }

    foreach ($dataToExport as $data) {
        fputcsv($file, [$data->full_name, $data->email, $data->gender, $data->age, $data->date_of_birth, $data->address]);
    }

    public function logout()
    {
        auth()->logout(); // Logout pengguna

        // Redirect pengguna ke halaman login setelah logout
        return redirect()->route('login');
    }

}
