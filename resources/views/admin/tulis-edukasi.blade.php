@extends('layout.app')

@section('title', 'Tulis Materi Edukasi')
@section('content')
<div class="container-fluid">
  <div class="row">
    @include('admin.sidebar')
    
    <div class="col-md-9 ms-sm-auto p-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Materi Edukasi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="#" class="btn btn-sm btn-outline-secondary">Lihat Daftar</a>
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h5>Tulis Materi Edukasi Baru</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Judul Materi</label>
              <input type="text" class="form-control" placeholder="Contoh: Penanganan Awal KDRT">
            </div>
            
            <div class="mb-3">
              <label class="form-label">Kategori</label>
              <select class="form-select">
                <option>Pelecehan</option>
                <option>KDRT</option>
                <option>Stalking</option>
                <option>Bullying</option>
                <option>Lainnya</option>
              </select>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Isi Materi (Format Poin-Poin)</label>
              <textarea class="form-control" rows="10" id="contentEditor"></textarea>
              <div class="form-text">Gunakan format poin-poin praktis. Contoh: 1. Langkah pertama... 2. Langkah kedua...</div>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Gambar Ilustrasi (opsional)</label>
              <input type="file" class="form-control" accept="image/*">
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan Materi
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('contentEditor');
</script>
@endpush
@endsection