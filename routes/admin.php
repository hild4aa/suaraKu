<?php
// routes/admin.php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\DetailPsikolog;
use App\Livewire\Admin\Edukasi;
use Illuminate\Support\Facades\Route;


Route::get('/admin/dashboard', action: Dashboard::class)->name('admin.dashboard');
Route::get('/admin/dashboard/psikolog/{id}', action: DetailPsikolog::class)->name('admin.detail_psikolog');
Route::get('/admin/edukasi', action: Edukasi::class)->name('admin.edukasi');

