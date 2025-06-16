@extends('layout.app')

@section('title', 'Message')

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
      <h2 class="mb-4">Pesan Konsultasi: Korban A</h2>

      <!-- Chat Box -->
      <div class="card mb-4" style="height: 500px; overflow-y: scroll;">
        <div class="card-body d-flex flex-column">

          <!-- Chat Item -->
          <div class="mb-3">
            <div class="bg-light p-3 rounded w-75">
              <strong>Korban A:</strong>
              <p>Saya merasa trauma setiap kali naik angkot sekarang.</p>
              <small class="text-muted">10:00 WIB</small>
            </div>
          </div>

          <div class="mb-3 text-end">
            <div class="bg-primary text-white p-3 rounded w-75 ms-auto">
              <strong>Psikolog:</strong>
              <p>Tidak apa-apa, itu reaksi yang wajar. Kita akan coba atasi bersama-sama.</p>
              <small class="text-white-50">10:10 WIB</small>
            </div>
          </div>

          <div class="mb-3">
            <div class="bg-light p-3 rounded w-75">
              <strong>Korban A:</strong>
              <p>Baik dok, terima kasih atas bantuannya</p>
              <small class="text-muted">10:15 WIB</small>
            </div>
          </div>

        </div>
      </div>

      <!-- Form Kirim Pesan -->
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Ketik pesan...">
          <button class="btn btn-primary" type="submit"><i class="bi bi-send"></i> Kirim</button>
        </div>
      </form>

    </div>

  </div>
</div>
@endsection
