<?php

use App\Livewire\Psikolog\Chatbox;
use App\Livewire\Psikolog\Dashboard;
use App\Livewire\Psikolog\DetailLaporan;
use Illuminate\Support\Facades\Route;

Route::get('/psikolog/dashboard', action: Dashboard::class)->name('psikolog.dashboard');
Route::get(uri: '/psikolog/detail_laporan/{id}', action: DetailLaporan::class)->name('psikolog.detail_laporan');
Route::get(uri: '/psikolog/chatbox/{id}', action: Chatbox::class)->name('psikolog.chatbox');

