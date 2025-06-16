<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- kita pakai jQuery biar simple -->
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Form Registrasi</h2>
    <form action="/register" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Pilih Role</label>
        <select name="role" id="role" class="form-select" required>
          <option value="">-- Pilih --</option>
          <option value="psikolog">Psikolog</option>
          <option value="korban">Korban</option>
        </select>
      </div>

      <!-- Field untuk Psikolog -->
      <div id="psikologFields" style="display:none;">
        <div class="mb-3">
          <label>Nama Lengkap</label>
          <input type="text" name="nama_psikolog" class="form-control">
        </div>

        <div class="mb-3">
          <label>Nomor STR/KTP (opsional)</label>
          <input type="text" name="ktp_psikolog" class="form-control">
        </div>

        <div class="mb-3">
          <label>Upload Sertifikat Psikolog</label>
          <input type="file" name="sertifikat_psikolog" class="form-control">
        </div>
      </div>

      <!-- Field untuk Korban -->
      <div id="korbanFields" style="display:none;">
        <div class="mb-3">
          <label>Nama Lengkap</label>
          <input type="text" name="nama_korban" class="form-control">
        </div>

        <div class="mb-3">
          <label>Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-select">
            <option value="">-- Pilih --</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Umur</label>
          <input type="number" name="umur" class="form-control">
        </div>

        <div class="mb-3">
          <label>Upload Foto Wajah</label>
          <input type="file" name="foto_korban" class="form-control">
        </div>
      </div>

      <button type="submit" class="btn btn-outline-warning w-100">Daftar</button>
    </form>
  </div>

  <script>
    $(document).ready(function(){
      $('#role').change(function(){
        let role = $(this).val();
        if(role == 'psikolog'){
          $('#psikologFields').show();
          $('#korbanFields').hide();
        } else if(role == 'korban'){
          $('#korbanFields').show();
          $('#psikologFields').hide();
        } else {
          $('#psikologFields').hide();
          $('#korbanFields').hide();
        }
      });
    });
  </script>
</body>
</html>
