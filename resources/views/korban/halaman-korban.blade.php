@extends('layout.app')

@section('title', 'Dashboard Korban')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">Selamat Datang di Sistem Pengaduan</h2>
        <p class="text-secondary">Silakan pilih menu untuk melanjutkan.</p>
    </div>

    <div class="row justify-content-center">

        <!-- Buat Laporan -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <i class="bi bi-pencil-square display-4 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Buat Laporan</h5>
                    <a href="" class="btn btn-success w-100">Mulai</a>
                </div>
            </div>
        </div>

        <!-- Laporan Saya -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <i class="bi bi-file-earmark-text display-4 text-warning mb-3"></i>
                    <h5 class="card-title mb-3">Laporan Saya</h5>
                    <a href="" class="btn btn-warning w-100 text-white">Lihat</a>
                </div>
            </div>
        </div>

        <!-- Logout -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <i class="bi bi-box-arrow-right display-4 text-danger mb-3"></i>
                    <h5 class="card-title mb-3">Logout</h5>
                    <form action="" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Keluar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
