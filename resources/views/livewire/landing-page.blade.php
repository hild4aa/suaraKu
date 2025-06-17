<div>
    {{-- In work, do what you enjoy. --}}
<div class="container py-5 position-relative">

  <!-- Tombol Login & Register di pojok kanan atas -->
<div class="position-absolute top-0 end-0 mt-3 me-3 d-flex align-items-center gap-2">
    <a href="/login" class="btn btn-outline-primary d-flex align-items-center">
        <i class="bi bi-box-arrow-in-right me-1"></i> Login
    </a>
    <a href="/register" class="btn btn-primary d-flex align-items-center">
        <i class="bi bi-person-plus me-1"></i> Register
    </a>
    <form action="/logout" method="POST" class="m-0">
        @csrf
        <button type="submit" class="btn btn-danger d-flex align-items-center">
            <i class="bi bi-box-arrow-right me-1"></i> Logout
        </button>
    </form>
</div>

  <!-- Hero Section -->
  <div class="row align-items-center mb-5">
    <div class="col-md-6">
      <h1 class="display-4 fw-bold mb-4">Layanan Dukungan Psikologi</h1>
      <p class="lead">Laporkan masalah Anda secara aman dan rahasia. Dapatkan dukungan dari psikolog profesional.</p>
      <div class="d-grid gap-2 d-md-flex">
        <a href="/edukasi" class="btn btn-outline-secondary btn-lg px-4">
          <i class="bi bi-book"></i> Materi Edukasi
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <img src="https://raw.githubusercontent.com/widy4aa/dump_image/refs/heads/main/130866814_p0_master1200.jpg" class="img-fluid rounded">
    </div>
  </div>

  <!-- Features Section -->
  <div class="row g-4 mb-5">
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="mb-3">
            <i class="bi bi-shield-lock" style="font-size: 2rem; color: #0d6efd;"></i>
          </div>
          <h4>Rahasia & Aman</h4>
          <p>Laporan Anda dijaga kerahasiaannya dengan sistem keamanan terenkripsi.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="mb-3">
            <i class="bi bi-people" style="font-size: 2rem; color: #0d6efd;"></i>
          </div>
          <h4>Psikolog Profesional</h4>
          <p>Didukung oleh psikolog bersertifikat dan berpengalaman.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="mb-3">
            <i class="bi bi-clock-history" style="font-size: 2rem; color: #0d6efd;"></i>
          </div>
          <h4>Respon Cepat</h4>
          <p>Tim kami akan merespon laporan Anda dalam waktu maksimal 24 jam.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Emergency Section -->
  <div class="alert alert-danger">
    <div class="d-flex align-items-center">
      <div class="flex-shrink-0">
        <i class="bi bi-exclamation-triangle-fill" style="font-size: 2rem;"></i>
      </div>
      <div class="flex-grow-1 ms-3">
        <h4>Dalam Keadaan Darurat?</h4>
        <p>Jika Anda dalam keadaan darurat dan membutuhkan bantuan segera, hubungi:</p>
        <ul>
          <li>Polisi: 110</li>
          <li>Ambulans: 118/119</li>
          <li>Layanan KDRT: 129 (SAPA)</li>
        </ul>
      </div>
    </div>
  </div>

</div>

</div>
