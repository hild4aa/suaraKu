@extends('layout.app')

@section('title', 'Dashboard Psikolog')

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
      <h3 class="mb-4">Daftar Laporan</h3>

      <!-- Filter -->
      <div class="mb-3">
        <button class="btn btn-outline-primary filter-btn" data-filter="belum">Belum Dibaca</button>
        <button class="btn btn-outline-warning filter-btn" data-filter="proses">Sedang Diproses</button>
        <button class="btn btn-outline-success filter-btn" data-filter="selesai">Selesai</button>
      </div>

      <!-- Chat list style -->
      <div class="list-group" id="chatList">
        <!-- Dummy data -->
        <a href="/psikolog/detail-laporan" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-status="belum">
          <div>
            <h6 class="mb-1">Korban A</h6>
            <small>Masalah KDRT - 10 menit lalu</small>
          </div>
          <span class="badge bg-danger">Belum</span>
        </a>

        <a href="/psikolog/detail-laporan" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-status="proses">
          <div>
            <h6 class="mb-1">Korban B</h6>
            <small>Pelecehan - 1 jam lalu</small>
          </div>
          <span class="badge bg-warning">Proses</span>
        </a>

        <a href="/psikolog/detail-laporan" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-status="selesai">
          <div>
            <h6 class="mb-1">Korban C</h6>
            <small>Stalking - 2 hari lalu</small>
          </div>
          <span class="badge bg-success">Selesai</span>
        </a>
      </div>
    </div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
    $('.filter-btn').click(function(){
      let filter = $(this).data('filter');
      $('#chatList a').hide();
      $('#chatList a').each(function(){
        if($(this).data('status') == filter){
          $(this).show();
        }
      });
    });
  });
</script>
@endsection
