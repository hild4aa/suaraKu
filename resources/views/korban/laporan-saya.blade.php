@extends('layout.app')

@section('title', 'Laporan Saya')

@section('content')
<div class="container py-5">

    <!-- Judul -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">Detail Laporan Saya</h2>
    </div>

    <!-- Informasi Laporan -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Informasi Laporan</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Jenis Masalah:</strong> Pelecehan Seksual</p>
                    <p><strong>Dilaporkan Pada:</strong> 15 Juni 2024, 08:30 WIB</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Status:</strong> <span class="badge bg-danger">Belum Ditanggapi</span></p>
                    <p><strong>Anonim:</strong> Ya</p>
                </div>
            </div>

            <h5 class="mb-3">Deskripsi Laporan:</h5>
            <div class="alert alert-light">
                <p>Saya mengalami pelecehan di angkutan umum pagi ini sekitar jam 7.30. Pelaku duduk di sebelah saya dan mulai menyentuh paha saya tanpa izin. Saya sudah berpindah tempat tapi dia mengikuti. Kejadian terjadi di angkot jurusan Blok M - Kota.</p>
            </div>

            <h5 class="mb-3">Bukti Pendukung:</h5>
            <div class="alert alert-warning">
                <i class="bi bi-exclamation-triangle"></i> Tidak ada bukti yang diunggah
            </div>
        </div>
    </div>

    <!-- Balasan Psikolog -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Balasan dari Psikolog</h5>
        </div>
        <div class="card-body">
            <div class="alert alert-info">
                <p>Terima kasih sudah melaporkan. Kami sangat menyesal atas kejadian yang menimpa Anda. Kami akan mendampingi Anda untuk proses konseling dan memberikan dukungan lanjutan.</p>
            </div>
        </div>
    </div>

    <!-- Tombol Message -->
    <div class="d-flex justify-content-end">
        <a href="" class="btn btn-outline-primary btn-lg">
            <i class="bi bi-chat-dots"></i> Message
        </a>
    </div>

</div>
@endsection
