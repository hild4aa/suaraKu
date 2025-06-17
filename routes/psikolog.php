<?php

use App\Livewire\Psikolog\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/psikolog/dashboard', action: Dashboard::class)->name('psikolog.dashboard');
