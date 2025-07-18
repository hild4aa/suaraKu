<div>
    @if (auth()->user()->status === 'Active')
    <h3 class="mb-4">Daftar Laporan Anda</h3>

    <div class="mb-3">
        <button wire:click="setFilter('semua')" class="btn {{ $filterStatus === 'semua' ? 'btn-primary' : 'btn-outline-primary' }}">Semua Laporan</button>
        <button wire:click="setFilter('belum_dibaca')" class="btn {{ $filterStatus === 'belum_dibaca' ? 'btn-danger' : 'btn-outline-danger' }}">Belum Dibaca</button>
        <button wire:click="setFilter('process')" class="btn {{ $filterStatus === 'process' ? 'btn-warning' : 'btn-outline-warning' }}">Sedang Diproses</button>
        <button wire:click="setFilter('selesai')" class="btn {{ $filterStatus === 'selesai' ? 'btn-outline-success' : 'btn-outline-success' }}">Selesai</button>
    </div>

    <div class="list-group" id="chatList">

        @forelse ($laporan as $item)
            @php
                $badge = $getBadgeInfo($item['status']);
            @endphp

            <a href="/psikolog/detail_laporan/{{ $item['id'] }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">{{ $item['nama_korban'] }}</h6>
                    <small class="text-muted">{{ Str::limit($item['judul'], 40) }} - {{ $item['waktu_lalu'] }}</small>
                </div>
                <span class="badge {{ $badge['class'] }}">{{ $badge['text'] }}</span>
            </a>
        @empty
            <div class="list-group-item">
                <p class="text-center text-muted mb-0">Tidak ada laporan yang cocok dengan filter ini.</p>
            </div>
        @endforelse
    </div>

    @else

        <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="card border-0 shadow-sm" style="max-width: 600px;">
                <div class="card-body p-4 p-md-5 text-center">

                    <div class="mb-4">
                        <i class="bi bi-clock-history text-primary" style="font-size: 4rem;"></i>
                    </div>

                    <h2 class="card-title h3 mb-3">Satu Langkah Lagi, Pendaftaran Anda Sedang Kami Tinjau</h2>
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

                    <form action="{{ route('logout') }}" method="POST" class="mt-3">
                        @csrf
                        <button type="submit" class="btn btn-outline-secondary">Logout</button>
                    </form>

                </div>
            </div>
        </div>

    @endif
</div>
