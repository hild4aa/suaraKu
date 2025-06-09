@extends('layout.app')

@section('title', 'Dashboard Psikolog')
@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 sidebar p-0">
      <div class="d-flex flex-column p-3" style="height: 100vh;">
        <h4 class="text-center my-4">Menu Psikolog</h4>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-house-door"></i> Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="nav-link">
              <i class="bi bi-envelope"></i> Tiket Baru
            </a>
          </li>
          <li>
            <a href="#" class="nav-link">
              <i class="bi bi-check-circle"></i> Tiket Ditanggapi
            </a>
          </li>
          <li>
            <a href="#" class="nav-link">
              <i class="bi bi-clock-history"></i> Riwayat
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
            <strong>Dr. Dian Psikolog</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Keluar</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Main Content -->
    <div class="col-md-9 ms-sm-auto p-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard Psikolog</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Hari Ini</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Minggu Ini</button>
          </div>
        </div>
      </div>
      
      <!-- Stats Cards -->
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title">Tiket Baru</h5>
              <h2 class="card-text">8</h2>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title">Menunggu Respon</h5>
              <h2 class="card-text">3</h2>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title">Tiket Selesai</h5>
              <h2 class="card-text">24</h2>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Tickets Table -->
      <h4 class="mb-3">Tiket Terbaru</h4>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>No. Tiket</th>
              <th>Jenis Masalah</th>
              <th>Waktu</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>TKT-20240615-101</td>
              <td>Pelecehan</td>
              <td>15 Jun 2024, 08:30</td>
              <td><span class="badge bg-danger">Baru</span></td>
              <td><a href="#" class="btn btn-sm btn-primary">Tanggapi</a></td>
            </tr>
            <tr>
              <td>TKT-20240615-102</td>
              <td>KDRT</td>
              <td>15 Jun 2024, 10:15</td>
              <td><span class="badge bg-warning">Ditanggapi</span></td>
              <td><a href="#" class="btn btn-sm btn-info">Lanjutkan</a></td>
            </tr>
            <tr>
              <td>TKT-20240614-098</td>
              <td>Stalking</td>
              <td>14 Jun 2024, 16:45</td>
              <td><span class="badge bg-success">Selesai</span></td>
              <td><a href="#" class="btn btn-sm btn-secondary">Detail</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection