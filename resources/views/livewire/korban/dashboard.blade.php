<div>
    <div class="container py-4">
        <h2 class="mb-4">Dashboard Laporan Anda</h2>

        {{-- Cek apakah variabel $laporan memiliki data atau tidak --}}
        @if (!empty($laporan))

            {{-- TAMPILAN JIKA ADA LAPORAN AKTIF --}}
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-journal-text me-2"></i>
                        {{ $laporan['judul'] }}
                    </h5>

                    {{-- Badge Status Dinamis --}}
                    @php
                        $statusClass = '';
                        switch ($laporan['status']) {
                            case 'process':
                                $statusClass = 'bg-primary';
                                break;
                            case 'belum_dibaca':
                                $statusClass = 'bg-warning text-dark';
                                break;
                            default:
                                $statusClass = 'bg-secondary';
                        }
                    @endphp
                    <span class="badge {{ $statusClass }}">{{ ucfirst(str_replace('_', ' ', $laporan['status'])) }}</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <p class="text-muted mb-1">Ditangani oleh Psikolog:</p>
                            <h6 class="fw-bold">{{ $laporan['nama_psikolog'] ?? 'Belum Ditentukan' }}</h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <p class="text-muted mb-1">Tanggal Laporan:</p>
                            <h6 class="fw-bold">
                                {{-- Format tanggal agar mudah dibaca (misal: Selasa, 18 Juni 2025) --}}
                                {{ \Carbon\Carbon::parse($laporan['created_at'])->isoFormat('dddd, D MMMM YYYY') }}
                            </h6>
                        </div>
                    </div>

                    <hr>

                    <p class="text-muted mb-1">Detail Keterangan:</p>
                    <p>{{ $laporan['keterangan'] }}</p>

                    @if ($laporan['balasan'])
                        <hr>
                        <p class="text-muted mb-1">Ringkasan/Balasan dari Psikolog:</p>
                        <p class="fst-italic">"{{ $laporan['balasan'] }}"</p>
                    @endif

                    @if ($laporan['bukti_link'])
                        <hr>
                        <p class="text-muted mb-2">Bukti yang Dilampirkan:</p>
                        <a href="{{ $laporan['bukti_link'] }}" target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-paperclip"></i> Lihat Bukti
                        </a>
                    @else
                        <hr>
                        <p class="text-muted">Tidak ada bukti yang dilampirkan.</p>
                    @endif
                </div>
                <div class="card-footer text-center">
                    {{-- Asumsi Anda punya route 'chat' yang menerima ID laporan atau chatbox --}}
                    <a href="/chatbox/{{$laporan['id_chatbox']}}" class="btn btn-success">
                       <i class="bi bi-chat-dots-fill"></i> Buka Ruang Konsultasi (Chat)
                    </a>
                </div>
            </div>

        @else

            {{-- TAMPILAN JIKA TIDAK ADA LAPORAN AKTIF --}}
            <div class="alert alert-info text-center" role="alert">
                <h4 class="alert-heading">Tidak Ada Laporan Aktif</h4>
                <p>Anda saat ini tidak memiliki laporan yang sedang diproses. Jika Anda membutuhkan bantuan atau ingin berkonsultasi, jangan ragu untuk membuat laporan baru.</p>
                <hr>
                <a href="{{-- route('laporan.create') --}}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Buat Laporan Baru
                </a>
            </div>

        @endif
    </div>
</div>
