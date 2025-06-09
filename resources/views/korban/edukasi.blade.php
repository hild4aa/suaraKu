@extends('layout.app')

@section('title', 'Materi Edukasi')
@section('content')
<div class="container py-5">
  <h2 class="text-center mb-5"><i class="bi bi-book"></i> Materi Edukasi</h2>
  
  <div class="row g-4">
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-header bg-primary text-white">
          <h5>Apa yang harus dilakukan saat dilecehkan di transportasi umum?</h5>
        </div>
        <div class="card-body">
          <ol class="list-group list-group-numbered">
            <li class="list-group-item">Cari posisi yang aman dan dekat dengan sopir/kondektur</li>
            <li class="list-group-item">Catat ciri-ciri pelaku dan waktu kejadian</li>
            <li class="list-group-item">Ambil foto/video jika memungkinkan</li>
            <li class="list-group-item">Laporkan segera ke petugas transportasi</li>
            <li class="list-group-item">Hubungi polisi (110) atau layanan darurat</li>
          </ol>
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-header bg-danger text-white">
          <h5>Penanganan Awal KDRT</h5>
        </div>
        <div class="card-body">
          <ol class="list-group list-group-numbered">
            <li class="list-group-item">Cari tempat aman segera</li>
            <li class="list-group-item">Hubungi tetangga/keluarga terdekat</li>
            <li class="list-group-item">Simpan bukti luka/foto kerusakan</li>
            <li class="list-group-item">Kunjungi Puskesmas/RS untuk visum</li>
            <li class="list-group-item">Lapor polisi atau hubungi SAPA 129</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection