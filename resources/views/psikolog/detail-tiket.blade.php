@extends('layout.app')

@section('title', 'Detail Laporan')

@section('content')
<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <div class="col-md-3 sidebar p-0">
      <div class="d-flex flex-column p-3 align-items-center" style="height: 100vh;">

        <!-- Foto & Nama Psikolog -->
        <div class="text-center my-4">
          <img src="" class="rounded-circle mb-2" width="100" height="100" alt="Foto Psikolog">
          <h5>Dr. Dian Psikolog</h5>
        </div>

        <!-- Menu -->
        <ul class="nav nav-pills flex-column mb-auto w-100">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-house-door"></i> Dashboard
            </a>
          </li>
        </ul>

        <hr class="w-100">

        <!-- Logout -->
        <form action="" method="POST" class="w-100">
          @csrf
          <button type="submit" class="btn btn-danger w-100">Logout</button>
        </form>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col-md-9 ms-sm-auto p-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Laporan: A</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="btn btn-sm btn-outline-primary">
            <i class="bi bi-chat-dots"></i> Message
          </button>
          <button class="btn btn-sm btn-outline-secondary ms-2" onclick="window.print()">
            <i class="bi bi-printer"></i> Cetak
          </button>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-header bg-primary text-white">
          <h5>Informasi Laporan</h5>
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

      <div class="card">
        <div class="card-header bg-success text-white">
          <h5>Respon Psikolog</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Balasan Anda</label>
              <textarea class="form-control" rows="5" placeholder="Tulis respon Anda di sini..."></textarea>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-send"></i> Kirim Respon
              </button>
              <button type="button" class="btn btn-success ms-2">
                <i class="bi bi-check-circle"></i> Kasus Selesai
              </button>
            </div>
          </form>
        </div>
      </div>

    </div> <!-- end main content -->

  </div> <!-- end row -->
</div> <!-- end container-fluid -->
@endsection

