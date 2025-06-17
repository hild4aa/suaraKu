<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livewire App</title>
    @livewireStyles
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<style>
    .form-section {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .navbar-brand {
      font-weight: 700;
    }
    .sidebar {
      min-height: 100vh;
      background: #212529;
      color: white;
    }
    .sidebar .nav-link {
      color: rgba(255,255,255,.75);
    }
    .sidebar .nav-link:hover {
      color: white;
    }
    .sidebar .nav-link.active {
      color: white;
      background: rgba(255,255,255,.1);
    }
  </style>
<body>
<div class="container-fluid">
  <div class="row">
     <div class="col-md-3 sidebar p-0">
      <div class="d-flex flex-column p-3 align-items-center" style="height: 100vh;">

        <!-- Admin Info -->
        <div class="text-center my-4">
          <h5>Admin Sistem</h5>
        </div>

        <ul class="nav nav-pills flex-column mb-auto w-100">
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link active">
              <i class="bi bi-house-door"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/edukasi" class="nav-link">
              <i class="bi bi-journal-plus"></i> Tambah Edukasi
            </a>
          </li>
        </ul>

        <hr class="w-100">

        <!-- Logout -->
        <form action="/logout" method="POST" class="w-100">
          @csrf
          <button type="submit" class="btn btn-danger w-100">Logout</button>
        </form>
      </div>
    </div>
      <div class="col-md-9 ms-sm-auto p-4">
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('delete') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{ $slot }}
      </div>
  </div>
</div>
    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
