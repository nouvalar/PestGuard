<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Rute untuk menampilkan form login

Route::get('/register', [RegisController::class, 'showRegistrationForm'])->name('register'); // Rute untuk menampilkan form registrasi