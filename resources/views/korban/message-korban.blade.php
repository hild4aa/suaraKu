@extends('layout.app')

@section('title', 'Pesan Konsultasi')

@section('content')
<div class="container py-5">

    <!-- Judul -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Pesan Konsultasi Anda</h2>
        <p class="text-muted">Layanan chat privat antara Anda dan Psikolog.</p>
    </div>

    <!-- Chat Box -->
    <div class="card shadow-sm mb-4" style="height: 500px; overflow-y: auto;">
        <div class="card-body d-flex flex-column justify-content-end">

            <!-- Chat dari Korban -->
            <div class="mb-3 d-flex">
                <div class="bg-light p-3 rounded shadow-sm">
                    <strong>Anda:</strong>
                    <p class="mb-1">Saya merasa trauma setiap kali naik angkot sekarang.</p>
                    <small class="text-muted">10:00 WIB</small>
                </div>
            </div>

            <!-- Chat dari Psikolog -->
            <div class="mb-3 d-flex justify-content-end">
                <div class="bg-primary text-white p-3 rounded shadow-sm">
                    <strong>Psikolog:</strong>
                    <p class="mb-1">Tidak apa-apa, itu reaksi yang wajar. Kita akan coba atasi bersama-sama.</p>
                    <small class="text-white-50">10:10 WIB</small>
                </div>
            </div>

            <!-- Chat dari Korban -->
            <div class="mb-3 d-flex">
                <div class="bg-light p-3 rounded shadow-sm">
                    <strong>Anda:</strong>
                    <p class="mb-1">Baik dok, terima kasih atas bantuannya.</p>
                    <small class="text-muted">10:15 WIB</small>
                </div>
            </div>

        </div>
    </div>

    <!-- Form Kirim Pesan -->
    <form>
        <div class="input-group shadow-sm">
            <input type="text" class="form-control form-control-lg" placeholder="Ketik pesan..." required>
            <button class="btn btn-primary btn-lg" type="submit"><i class="bi bi-send"></i> Kirim</button>
        </div>
    </form>

</div>
@endsection
