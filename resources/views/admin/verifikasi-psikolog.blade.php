@extends('layout.app')

@section('title', 'Detail Psikolog')

@section('content')
<div class="container-fluid">
  <div class="row">
    
     <!-- Sidebar -->
    <div class="col-md-3 sidebar p-0">
      <div class="d-flex flex-column p-3 align-items-center" style="height: 100vh;">

        <!-- Admin Info -->
        <div class="text-center my-4">
          <img src="" class="rounded-circle mb-2" width="100" height="100" alt="Foto Admin">
          <h5>Admin Sistem</h5>
        </div>

        <!-- Menu -->
        <ul class="nav nav-pills flex-column mb-auto w-100">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-house-door"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bi bi-person-badge"></i> Daftar Psikolog
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bi bi-journal-plus"></i> Tambah Edukasi
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
      <h3 class="mb-4">Detail Psikolog</h3>

      <div class="card shadow-sm">
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label fw-bold">Nama Lengkap:</label>
            <div>Dr. Dian Psikolog</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Role:</label>
            <div>Psikolog</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Nomor STR/KTP:</label>
            <div>1234567890</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Sertifikat Psikolog:</label>
            <div><a href="#" target="_blank">Lihat Sertifikat</a></div>
          </div>

          <form action="" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Verifikasi</button>
          </form>
        </div>
      </div>

    </div>

  </div>
</div>
@endsection
