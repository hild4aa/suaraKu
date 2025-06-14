@extends('layout.app')

@section('title', 'Dashboard Admin')

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
      <h3 class="mb-4">Daftar Psikolog</h3>

      <!-- Filter -->
      <div class="mb-3">
        <button class="btn btn-outline-success filter-btn" data-filter="verif">Terverifikasi</button>
        <button class="btn btn-outline-danger filter-btn" data-filter="belum">Belum Terverifikasi</button>
      </div>

      <!-- List Psikolog -->
      <div class="list-group" id="psikologList">
        <!-- Dummy data -->
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-status="verif">
          <div>
            <h6 class="mb-1">Dr. Dian Psikolog</h6>
            <small>Email: dian@example.com</small>
          </div>
          <span class="badge bg-success">Terverifikasi</span>
        </a>

        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-status="belum">
          <div>
            <h6 class="mb-1">Dr. Budi Psikolog</h6>
            <small>Email: budi@example.com</small>
          </div>
          <span class="badge bg-danger">Belum Terverifikasi</span>
        </a>

        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-status="verif">
          <div>
            <h6 class="mb-1">Dr. Sari Psikolog</h6>
            <small>Email: sari@example.com</small>
          </div>
          <span class="badge bg-success">Terverifikasi</span>
        </a>

        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-status="belum">
          <div>
            <h6 class="mb-1">Dr. Andi Psikolog</h6>
            <small>Email: andi@example.com</small>
          </div>
          <span class="badge bg-danger">Belum Terverifikasi</span>
        </a>
      </div>
    </div>

  </div>
</div>

<!-- Filter Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
    $('.filter-btn').click(function(){
      let filter = $(this).data('filter');
      $('#psikologList a').hide();
      $('#psikologList a').each(function(){
        if($(this).data('status') == filter){
          $(this).show();
        }
      });
    });
  });
</script>
@endsection
