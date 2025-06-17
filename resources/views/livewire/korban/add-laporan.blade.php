<div class="container py-4">
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Formulir Laporan Konsultasi</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Ceritakan masalah Anda secara detail. Semua informasi akan dijaga kerahasiaannya dan hanya akan dilihat oleh psikolog yang ditugaskan.</p>

                    {{-- Form yang terhubung ke Livewire --}}
                    <form wire:submit="simpanLaporan">

                        {{-- Judul Laporan --}}
                        <div class="mb-3">
                            <label for="judul" class="form-label fw-bold">Judul Singkat Laporan</label>
                            <input type="text" wire:model="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Contoh: Merasa cemas berlebihan di tempat kerja">
                            @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        {{-- Keterangan Detail --}}
                        <div class="mb-3">
                            <label for="keterangan" class="form-label fw-bold">Ceritakan Masalah Anda</label>
                            <textarea wire:model="keterangan" id="keterangan" rows="8" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Jelaskan secara rinci situasi, perasaan, dan apa yang telah Anda alami..."></textarea>
                            @error('keterangan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        {{-- Upload Bukti --}}
                        <div class="mb-4">
                            <label for="bukti" class="form-label fw-bold">Lampirkan Bukti (Opsional)</label>
                            <p class="small text-muted">Anda bisa melampirkan gambar (screenshot, dll.) jika ada. Maksimal 2MB.</p>
                            <input type="file" wire:model="bukti" id="bukti" class="form-control @error('bukti') is-invalid @enderror">
                            @error('bukti') <div class="invalid-feedback">{{ $message }}</div> @enderror

                            {{-- Indikator Loading saat upload --}}
                            <div wire:loading wire:target="bukti" class="text-primary mt-2">Uploading...</div>

                            {{-- Preview Gambar --}}
                            @if ($bukti)
                                <div class="mt-3">
                                    <p>Preview Gambar:</p>
                                    <img src="{{ $bukti->temporaryUrl() }}" class="img-fluid rounded" style="max-height: 200px;">
                                </div>
                            @endif
                        </div>

                        {{-- Tombol Submit --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <span wire:loading.remove wire:target="simpanLaporan">
                                    <i class="bi bi-send-fill me-2"></i> Kirim Laporan
                                </span>
                                <span wire:loading wire:target="simpanLaporan">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Mengirim...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
