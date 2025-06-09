@extends('layout.app')

@section('title', 'Laporan Terkirim')
@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <div class="form-section">
        <div class="mb-4">
          <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem;"></i>
        </div>
        <h2 class="mb-3">Laporan Anda Telah Diterima!</h2>
        <div class="alert alert-info">
          <h4 class="alert-heading">Nomor Tiket: <strong>TKT-20240615-123</strong></h4>
          <p>Kami telah mengirim detail laporan ke email Anda. Gunakan nomor tiket ini untuk melacak perkembangan laporan.</p>
        </div>
        <div class="d-grid gap-2">
          <a href="/" class="btn btn-outline-primary">Kembali ke Beranda</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection