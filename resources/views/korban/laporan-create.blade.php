@extends('layout.app')

@section('title', 'Buat Laporan Rahasia')
@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="form-section">
        <h2 class="text-center mb-4"><i class="bi bi-shield-lock"></i> Buat Laporan Rahasia</h2>
        
        <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label">Jenis Masalah</label>
            <select class="form-select" name="issue_type" required>
              <option value="">Pilih Jenis Masalah</option>
              <option value="pelecehan">Pelecehan Seksual</option>
              <option value="KDRT">Kekerasan Dalam Rumah Tangga</option>
              <option value="stalking">Stalking/Penguntitan</option>
              <option value="bullying">Bullying/Perundungan</option>
            </select>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Deskripsi Singkat</label>
            <textarea class="form-control" name="description" rows="4" placeholder="Jelaskan kronologis singkat kejadian..." required></textarea>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Upload Bukti (opsional)</label>
            <input type="file" class="form-control" name="attachment" accept=".jpg,.png,.pdf,.mp3,.mp4">
            <div class="form-text">Maksimal 2MB (jpg, png, pdf, mp3, mp4)</div>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Email Anda</label>
            <input type="email" class="form-control" name="email" placeholder="email@contoh.com" required>
            <div class="form-text">Kami akan mengirim nomor tiket ke email ini</div>
          </div>
          
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="anonymous" id="anonymous" checked>
            <label class="form-check-label" for="anonymous">Laporkan secara anonim</label>
          </div>
          
          <button type="submit" class="btn btn-primary w-100 py-2">
            <i class="bi bi-send"></i> Kirim Laporan
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection