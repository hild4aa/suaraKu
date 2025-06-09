@extends('layout.app')

@section('title', 'Verifikasi Psikolog')
@section('content')
<div class="container-fluid">
  <div class="row">
    @include('admin.sidebar')
    
    <div class="col-md-9 ms-sm-auto p-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Verifikasi Psikolog</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Ekspor</button>
          </div>
        </div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No. STR</th>
              <th>Daftar Pada</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>PSY-001</td>
              <td>Dr. Dian Wahyuningsih, M.Psi</td>
              <td>dian@contoh.com</td>
              <td>STR-123456789</td>
              <td>14 Jun 2024</td>
              <td><span class="badge bg-warning">Pending</span></td>
              <td>
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal">
                  <i class="bi bi-eye"></i> Detail
                </button>
              </td>
            </tr>
            <tr>
              <td>PSY-002</td>
              <td>Dr. Andi Setiawan, M.Psi</td>
              <td>andi@contoh.com</td>
              <td>STR-987654321</td>
              <td>13 Jun 2024</td>
              <td><span class="badge bg-success">Terverifikasi</span></td>
              <td>
                <button class="btn btn-sm btn-primary" disabled>
                  <i class="bi bi-check-circle"></i> Sudah Diverifikasi
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Psikolog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <h6>Data Pribadi</h6>
            <p><strong>Nama Lengkap:</strong> Dr. Dian Wahyuningsih, M.Psi</p>
            <p><strong>Email:</strong> dian@contoh.com</p>
            <p><strong>No. HP:</strong> 081234567890</p>
            <p><strong>No. STR:</strong> STR-123456789</p>
            <p><strong>Tanggal Daftar:</strong> 14 Juni 2024</p>
          </div>
          <div class="col-md-6">
            <h6>Dokumen Pendukung</h6>
            <div class="mb-3">
              <label class="form-label">Sertifikat Psikolog</label>
              <div class="border p-2 text-center">
                <i class="bi bi-file-earmark-pdf" style="font-size: 3rem;"></i>
                <p>sertifikat_psikolog.pdf</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Unduh</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Verifikasi</button>
        <button type="button" class="btn btn-danger">Tolak</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@endsection