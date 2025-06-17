<div class="container mt-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">Form Registrasi</h2>

    <form wire:submit="register">

        {{-- Field Umum --}}
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" wire:model="username" id="username" class="form-control @error('username') is-invalid @enderror" required placeholder="Contoh: budi_setiawan98">
            <div class="form-text">Hanya boleh berisi huruf, angka, underscore (_), dan strip (-).</div>
            @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" wire:model="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" wire:model="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="role">Saya ingin mendaftar sebagai</label>
            <select wire:model.live="selectedRole" id="role" class="form-select @error('selectedRole') is-invalid @enderror" required>
                <option value="">-- Pilih Role --</option>
                <option value="psikolog">Psikolog</option>
                <option value="korban">Korban (Pengguna)</option>
            </select>
            @error('selectedRole') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <hr class="my-4">

        {{-- Field untuk Psikolog (Kondisional dengan @if) --}}
        @if ($selectedRole === 'psikolog')
        <div wire:transition>
            {{-- ... (sisa field psikolog tidak berubah) ... --}}
            <h4 class="mb-3">Data Diri Psikolog</h4>
            <div class="mb-3">
                <label for="nama_psikolog">Nama Lengkap (beserta gelar)</label>
                <input type="text" wire:model="nama_psikolog" id="nama_psikolog" class="form-control @error('nama_psikolog') is-invalid @enderror">
                @error('nama_psikolog') <div class="invalid-feedback">{{ $message}}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="ktp_psikolog">Nomor STR/KTP (opsional)</label>
                <input type="text" wire:model="ktp_psikolog" id="ktp_psikolog" class="form-control @error('ktp_psikolog') is-invalid @enderror">
                @error('ktp_psikolog') <div class="invalid-feedback">{{ $message}}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="sertifikat_psikolog">Upload Sertifikat/Surat Izin Praktek (Wajib)</label>
                <input type="file" wire:model="sertifikat_psikolog" id="sertifikat_psikolog" class="form-control @error('sertifikat_psikolog') is-invalid @enderror">
                <div wire:loading wire:target="sertifikat_psikolog" class="text-primary mt-1">Uploading...</div>
                @if ($sertifikat_psikolog) <img src="{{ $sertifikat_psikolog->temporaryUrl() }}" class="img-thumbnail mt-2" width="150"> @endif
                @error('sertifikat_psikolog') <div class="invalid-feedback">{{ $message}}</div> @enderror
            </div>
        </div>
        @endif

        {{-- Field untuk Korban (Kondisional dengan @if) --}}
        @if ($selectedRole === 'korban')
        <div wire:transition>
             {{-- ... (sisa field korban tidak berubah) ... --}}
             <h4 class="mb-3">Data Diri Pengguna</h4>
            <div class="mb-3">
                <label for="nama_korban">Nama Lengkap</label>
                <input type="text" wire:model="nama_korban" id="nama_korban" class="form-control @error('nama_korban') is-invalid @enderror">
                @error('nama_korban') <div class="invalid-feedback">{{ $message}}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select wire:model="jenis_kelamin" id="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror">
                    <option value="">-- Pilih --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                @error('jenis_kelamin') <div class="invalid-feedback">{{ $message}}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="umur">Umur</label>
                <input type="number" wire:model="umur" id="umur" class="form-control @error('umur') is-invalid @enderror">
                @error('umur') <div class="invalid-feedback">{{ $message}}</div> @enderror
            </div>
        </div>
        @endif

        {{-- Hanya tampilkan tombol daftar jika role sudah dipilih --}}
        @if ($selectedRole)
        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-primary btn-lg">
                <span wire:loading.remove wire:target="register">Daftar Sekarang</span>
                <span wire:loading wire:target="register">Mendaftarkan...</span>
            </button>
        </div>
        @endif
    </form>
</div>
