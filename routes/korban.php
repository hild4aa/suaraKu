<?php

use App\Livewire\Korban\Chatbox;
use App\Livewire\Korban\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/dashboard', action: Dashboard::class)->name('korban.dashboard');
Route::get(uri: '/laporan', action: Dashboard::class)->name('korban.laporan');
Route::get(uri: '/chatbox/{id}', action: Chatbox::class)->name('korban.chatbox');
