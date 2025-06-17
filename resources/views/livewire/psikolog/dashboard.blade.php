<div>
    @if (auth()->user()->status === 'Active')

        {{-- KONTEN DASHBOARD AKTIF TETAP SAMA --}}
        <div>
            <h1 class="mb-4">Selamat Datang, {{ auth()->user()->name }}</h1>
            <p>Ini adalah halaman dashboard Psikolog Anda.</p>
            {{-- ... sisa konten dashboard Anda ... --}}
        </div>

    @else

        {{-- JIKA STATUS BUKAN ACTIVE: TAMPILAN BARU YANG LEBIH TENANG --}}
        <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="card border-0 shadow-sm" style="max-width: 600px;">
                <div class="card-body p-4 p-md-5 text-center">

                    {{-- 1. Ikon yang lebih besar dan netral --}}
                    <div class="mb-4">
                        <i class="bi bi-clock-history text-primary" style="font-size: 4rem;"></i>
                    </div>

                    {{-- 2. Judul yang lebih besar dan informatif --}}
                    <h2 class="card-title h3 mb-3">Satu Langkah Lagi, Pendaftaran Anda Sedang Kami Tinjau</h2>

                    {{-- 3. Pesan yang lebih calm dan profesional --}}
                    <p class="text-muted">
                        Kami telah menerima pendaftaran Anda. Untuk menjaga kualitas dan keamanan layanan, tim Admin kami perlu melakukan verifikasi pada data dan sertifikat yang Anda kirimkan.
                    </p>

                    <div class="alert alert-light mt-4">
                        <p class="small text-muted mb-0">
                            <b>Info:</b> Jika dalam beberapa hari ke depan Anda tidak dapat login kembali, kemungkinan pendaftaran Anda ditolak. Anda dipersilakan untuk mencoba mendaftar lagi dengan data yang lebih lengkap dan valid.
                        </p>
                    </div>

                    <hr class="my-4">

                    <p class="small text-dark">
                        Terima kasih atas kesabaran Anda.
                    </p>

                    {{-- Tombol Logout agar pengguna tidak terjebak di halaman ini --}}
                    <form action="{{ route('logout') }}" method="POST" class="mt-3">
                        @csrf
                        <button type="submit" class="btn btn-outline-secondary">Logout</button>
                    </form>

                </div>
            </div>
        </div>

    @endif
</div>
