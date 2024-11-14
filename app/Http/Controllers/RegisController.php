<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisController extends Controller
{
    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('register');
    }
}
