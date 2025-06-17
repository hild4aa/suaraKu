<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body px-0">
                        <small class="text-muted">{{ $laporan['created_at'] }}</small>
                        <h1 class="card-title h2 mt-2">{{ $laporan['judul'] }}</h1>
                        <h6 class="card-subtitle mb-3 text-muted">Dilaporkan oleh: {{ $laporan['nama_korban'] }}</h6>

                        <hr>

                        <h5 class="mt-4">Keterangan Masalah</h5>
                        <p style="white-space: pre-wrap;">{{ $laporan['keterangan'] }}</p>

                        @if ($laporan['bukti_link'])
                            <h5 class="mt-4">Bukti Lampiran</h5>
                            <a href="{{ $laporan['bukti_link'] }}" target="_blank">
                                <img src="{{ $laporan['bukti_link'] }}" alt="Bukti Laporan" class="img-fluid rounded" style="max-height: 300px;">
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <strong>Tindakan Anda</strong>
                    </div>
                    <div class="card-body">
                        {{-- Form untuk memberi balasan --}}
                        <form wire:submit="simpanBalasan">
                            <div class="mb-3">
                                <label for="balasan" class="form-label"><strong>Balasan / Catatan Profesional</strong></label>
                                <textarea wire:model="isiBalasan" id="balasan" rows="8" class="form-control @error('isiBalasan') is-invalid @enderror" placeholder="Tuliskan analisis, saran, atau catatan Anda di sini..."></textarea>
                                @error('isiBalasan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label"><strong>Ubah Status Laporan</strong></label>
                                <select wire:model="statusLaporan" id="status" class="form-select">
                                    <option value="process">Sedang Diproses</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    <span wire:loading.remove wire:target="simpanBalasan">
                                        Simpan Balasan & Status
                                    </span>
                                    <span wire:loading wire:target="simpanBalasan">
                                        Menyimpan...
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-grid mt-3">
                    <a href="/psikolog/chatbox/{{$laporan['id_chatbox']}}" class="btn btn-success btn-lg">
                        <i class="bi bi-chat-dots-fill me-2"></i>
                        Lakukan Via Chat
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Script untuk menampilkan notifikasi sukses --}}
    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('balasan-disimpan', (message) => {
                alert(message);
            });
        });
    </script>
</div>
