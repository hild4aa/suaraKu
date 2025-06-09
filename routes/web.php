<?php

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
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/laporan', function () {
    return view('korban.laporan-create');
});

Route::get('/edukasi', function () {
    return view('korban.edukasi');
});

Route::get('/login', function () {
    return view('psikolog.login');
});

Route::get('/register', function () {
    return view('psikolog.registrasi');
});

use Illuminate\Http\Request;

Route::post('/register', function (Request $request) {
    // Simulasi penyimpanan, hanya untuk demo
    // Kamu bisa dd($request->all()); untuk debugging

    return redirect('/')->with('message', 'Registrasi berhasil! Silakan login.');
});


Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    // Simulasi user (hardcoded)
    $dummyEmail = 'psikolog@mail.com';
    $dummyPassword = 'password123';

    if ($email === $dummyEmail && $password === $dummyPassword) {
        // Login berhasil, redirect ke dashboard
        return redirect('/dashboard')->with('message', 'Login berhasil!');
    } else {
        // Gagal login
        return redirect('/login')->with('error', 'Email atau password salah!');
    }
});

// Route::get('/', function () {
//     return view('psikolog.dashboard-p');
// });

// Route::get('/', function () {
//     return view('admin.dashboard-a');
// });
