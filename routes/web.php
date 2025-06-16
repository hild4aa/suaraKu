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

Route::get('/psikolog/dashboard', function () {
    return view('psikolog.dashboard-p');
});

Route::get('/psikolog/detail-laporan', function () {
    return view('psikolog.detail-tiket');
});

Route::get('/psikolog/message', function (){
    return view('psikolog.message--');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard-a');
});

Route::get('/admin/detail-psikolog', function () 
{
    return view('admin.verifikasi-psikolog');
});

Route::get('/admin/tambah-edukasi', function ()
{
    return view('admin.tulis-edukasi');
});

Route::get('/korban/halaman-korban', function () {
    return view('korban.halaman-korban');
});

Route::get('/korban/buat-laporan', function () {
    return view('korban.laporan-create');
});

Route::get('/korban/laporan-saya', function () {
    return view('korban.laporan-saya');
});

Route::get('/korban/message', function () {
    return view('korban.message-korban');
});

