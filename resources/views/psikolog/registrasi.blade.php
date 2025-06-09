<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Psikolog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Form Registrasi Psikolog</h2>
    <form action="/register" method="POST" enctype="multipart/form-data">
  @csrf

      <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label>Nomor STR/KTP (opsional)</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control">
      </div>
      <div class="mb-3">
        <label>Upload Sertifikat Psikolog</label>
        <input type="file" class="form-control">
      </div>
      <button type="submit" class="btn btn-outline-warning w-100">Daftar</button>
    </form>
  </div>
</body>
</html>
