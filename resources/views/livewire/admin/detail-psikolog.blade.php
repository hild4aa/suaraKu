<div>
    {{-- Komentar ini bisa Anda hapus --}}
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <h3 class="mb-4">Detail Psikolog</h3>
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Lengkap:</label>
                {{-- Gunakan syntax object -> lebih umum untuk Eloquent --}}
                <div>{{ $psikolog['name'] }}</div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Role:</label>
                <div>Psikolog</div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nomor STR/KTP:</label>
                <div>{{ $psikolog['noKtp'] }}</div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Sertifikat Psikolog:</label>
                {{-- Gunakan asset() helper untuk path yang aman --}}
                <div>
                    <a href="{{ $psikolog['sertifikat_psikolog_img'] }}" target="_blank">
                        Lihat Sertifikat
                    </a>
                </div>
            </div>

            {{-- Tampilkan tombol hanya jika statusnya belum terverifikasi --}}
            @if ($psikolog['status'] != 'Active')
                <button
                    type="button"
                    class="btn btn-success"
                    wire:click="verify">
                    Verifikasi
                </button>
                
                <button
                    type="button"
                    class="btn btn-danger"
                    wire:click="delete"
                    wire:confirm="Apakah Anda yakin ingin menghapus psikolog '{{ $psikolog['name'] }}'?">
                    Hapus
                </button>
            @endif
        </div>
    </div>
</div>
