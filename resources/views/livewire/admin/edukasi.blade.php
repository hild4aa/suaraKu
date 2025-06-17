<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
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
     <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="card-title mb-0">Form Tambah Edukasi</h5>
        </div>
        <div class="card-body">
            {{-- `wire:submit.prevent` akan memanggil method `save()` saat form disubmit --}}
            <form wire:submit.prevent="save">

                {{-- Input untuk Judul --}}
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Edukasi</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Masukkan judul" wire:model="judul">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Input untuk Keterangan --}}
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" rows="4" placeholder="Masukkan keterangan singkat" wire:model="keterangan"></textarea>
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Input untuk Gambar --}}
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" wire:model="gambar">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    {{-- Preview gambar sementara sebelum di-upload --}}
                    @if ($gambar)
                        <div class="mt-2">
                            <p>Preview:</p>
                            <img src="{{ $gambar->temporaryUrl() }}" alt="Preview Gambar" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    @endif
                </div>

                {{-- Tombol Save --}}
                <button type="submit" class="btn btn-primary">
                    <span wire:loading.remove wire:target="save">
                        Simpan
                    </span>
                    {{-- Tampilkan spinner saat proses save berjalan --}}
                    <span wire:loading wire:target="save">
                        Menyimpan...
                    </span>
                </button>

            </form>
        </div>
    </div>
</div>
