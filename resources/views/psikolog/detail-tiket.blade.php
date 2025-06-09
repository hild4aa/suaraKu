@extends('layout.app')

@section('title', 'Detail Tiket')
@section('content')
<div class="container-fluid">
  <div class="row">
    @include('psikolog.sidebar')
    
    <div class="col-md-9 ms-sm-auto p-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Tiket: TKT-20240615-101</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button class="btn btn-sm btn-outline-secondary" onclick="window.print()">
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
            
            <div class="mb-3">
              <label class="form-label">Jadwal Konseling Lanjutan (opsional)</label>
              <input type="datetime-local" class="form-control">
            </div>
            
            <div class="mb-3">
              <label class="form-label">Link Video Call (opsional)</label>
              <input type="url" class="form-control" placeholder="https://meet.google.com/xxx-yyyy-zzz">
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-send"></i> Kirim Respon
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection