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
    /* Style Anda tetap sama, tidak perlu diubah */
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
    .profile-info {
        border-top: 1px solid rgba(255,255,255,.1);
        border-bottom: 1px solid rgba(255,255,255,.1);
        padding: 15px 0;
    }
    .profile-info .label {
        font-size: 0.8rem;
        color: rgba(255,255,255,.5);
    }
    .profile-info .data {
        font-size: 1rem;
        font-weight: 500;
    }
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar p-0">
            <div class="d-flex flex-column p-3 align-items-center" style="height: 100vh;">

                <div class="text-center my-4 w-100 profile-info">
                    <div class="mb-2">
                        <div class="label">Nama</div>
                        <div class="data">{{ auth()->user()->name ?? 'Nama Pengguna' }}</div>
                    </div>
                    <div class="mb-2">
                        <div class="label">Umur</div>
                        {{-- Asumsi 'age' adalah accessor di model User, atau hitung dari tanggal lahir --}}
                        <div class="data">{{ auth()->user()->age ?? '25' }} Tahun</div>
                    </div>
                    <div>
                        <div class="label">Jenis Kelamin</div>
                        <div class="data">{{ ucfirst(auth()->user()->jenis_kelamin ?? 'Laki-laki') }}</div>
                    </div>
                </div>
                {{-- ================== MENU NAVIGASI BARU ================== --}}
                <ul class="nav nav-pills flex-column mb-auto w-100">
                    <li class="nav-item">
                        {{-- Kelas 'active' dibuat dinamis berdasarkan URL saat ini --}}
                        <a href="/dashboard" class="nav-link {{ request()->is('/dashboard*') ? 'active' : '' }}">
                            <i class="bi bi-house-door"></i> Dashboard
                        </a>
                    </li>
                </ul>
                {{-- ================== AKHIR MENU NAVIGASI ================== --}}

                <hr class="w-100">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
