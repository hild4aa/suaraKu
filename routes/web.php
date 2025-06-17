<?php
// routes/web.php

use App\Livewire\LandingPage;
use App\Livewire\Auth\Login;
use App\Livewire\Edukasi;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rute yang bisa diakses oleh SEMUA ORANG (tamu & yang sudah login)
Route::get(uri: '/', action: LandingPage::class)->name('landing_page');
Route::get(uri: '/edukasi', action: Edukasi::class)->name('Edukasi');

// Rute HANYA untuk TAMU (yang belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
});

// Rute HANYA untuk PENGGUNA YANG SUDAH LOGIN
Route::middleware('auth')->group(function () {

    // Panggil file rute untuk setiap role
    require __DIR__.'/admin.php';
    require __DIR__.'/psikolog.php';
    require __DIR__.'/korban.php';

    // Rute Logout
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');
});
