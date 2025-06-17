<div>
    {{-- BAGIAN UNTUK PSIKOLOG TERVERIFIKASI --}}
    <h3 class="mb-3">Psikolog Terverifikasi</h3>
    <div class="list-group mb-5">
        @forelse ($psikolog_active as $psikolog)
            <a href="/admin/dashboard/psikolog/{{$psikolog['id']}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    {{-- Tampilkan data dari array --}}
                    <h6 class="mb-1">{{ $psikolog['name'] }}</h6>
                    <small>Email: {{ $psikolog['email'] }}</small>
                </div>
                {{-- Badge statis karena semua di list ini pasti terverifikasi --}}
                <span class="badge bg-success">Terverifikasi</span>
            </a>
        @empty
            <div class="list-group-item">
                <p class="text-center text-muted mb-0">Belum ada psikolog yang terverifikasi.</p>
            </div>
        @endforelse
    </div>

    {{-- BAGIAN UNTUK PSIKOLOG BELUM TERVERIFIKASI --}}
    <h3 class="mb-3">Menunggu Verifikasi</h3>
    <div class="list-group">
        @forelse ($psikolog_inActive as $psikolog)
            <a href="/admin/dashboard/psikolog/{{$psikolog['id']}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">{{ $psikolog['name'] }}</h6>
                    <small>Email: {{ $psikolog['email'] }}</small>
                </div>
                {{-- Badge statis karena semua di list ini pasti belum terverifikasi --}}
                <span class="badge bg-danger">Belum Terverifikasi</span>
            </a>
        @empty
            <div class="list-group-item">
                <p class="text-center text-muted mb-0">Semua psikolog sudah terverifikasi.</p>
            </div>
        @endforelse
    </div>
</div>
