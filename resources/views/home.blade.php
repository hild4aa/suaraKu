@extends('layout.app')

@section('title', 'Layanan Psikologi Online')
@section('content')
<div class="container py-5">
  <!-- Hero Section -->
  <div class="row align-items-center mb-5">
    <div class="col-md-6">
      <h1 class="display-4 fw-bold mb-4">Layanan Dukungan Psikologi</h1>
      <p class="lead">Laporkan masalah Anda secara aman dan rahasia. Dapatkan dukungan dari psikolog profesional.</p>
      <div class="d-grid gap-2 d-md-flex">
        
        <a href="/laporan" class="btn btn-primary btn-lg px-4 me-md-2">
          <i class="bi bi-plus-circle"></i> Buat Laporan
        </a>
        <a href="/edukasi" class="btn btn-outline-secondary btn-lg px-4">
          <i class="bi bi-book"></i> Materi Edukasi
        </a>
        <div class="mt-4">
        <a href="/login" class="btn btn-outline-primary btn-lg me-2">
            <i class="bi bi-box-arrow-in-right"></i> Login
        </a>
        <a href="/register" class="btn btn-primary btn-lg">
            <i class="bi bi-person-plus"></i> Register
        </a>
</div>

      </div>
    </div>
    <div class="col-md-6">
      <img src="https://via.placeholder.com/600x400" alt="Hero Image" class="img-fluid rounded">
    </div>
  </div>
  
  <!-- Features Section -->
  <div class="row g-4 mb-5">
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="mb-3">
            <i class="bi bi-shield-lock" style="font-size: 2rem; color: #0d6efd;"></i>
          </div>
          <h4>Rahasia & Aman</h4>
          <p>Laporan Anda dijaga kerahasiaannya dengan sistem keamanan terenkripsi.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="mb-3">
            <i class="bi bi-people" style="font-size: 2rem; color: #0d6efd;"></i>
          </div>
          <h4>Psikolog Profesional</h4>
          <p>Didukung oleh psikolog bersertifikat dan berpengalaman.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="mb-3">
            <i class="bi bi-clock-history" style="font-size: 2rem; color: #0d6efd;"></i>
          </div>
          <h4>Respon Cepat</h4>
          <p>Tim kami akan merespon laporan Anda dalam waktu maksimal 24 jam.</p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Emergency Section -->
  <div class="alert alert-danger">
    <div class="d-flex align-items-center">
      <div class="flex-shrink-0">
        <i class="bi bi-exclamation-triangle-fill" style="font-size: 2rem;"></i>
      </div>
      <div class="flex-grow-1 ms-3">
        <h4>Dalam Keadaan Darurat?</h4>
        <p>Jika Anda dalam keadaan darurat dan membutuhkan bantuan segera, hubungi:</p>
        <ul>
          <li>Polisi: 110</li>
          <li>Ambulans: 118/119</li>
          <li>Layanan KDRT: 129 (SAPA)</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection