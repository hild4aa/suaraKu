<?php

namespace App\Livewire\Korban;

use App\Models\chatbox;
use App\Models\img;
use App\Models\laporan;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;

#[Layout('components.layouts.app_korban')]
#[Title('addLaporan')]
class AddLaporan extends Component
{
     use WithFileUploads; // Aktifkan fitur upload file

    // Properti yang akan di-binding ke form
    #[Rule('required|string|min:10|max:100')]
    public string $judul = '';

    #[Rule('required|string|min:20')]
    public string $keterangan = '';

    // 'nullable' berarti bukti tidak wajib, 'image' dan 'max:2048' adalah validasi
    #[Rule('nullable|image|max:2048')]
    public $bukti;

    // Method yang dijalankan saat form disubmit
    public function simpanLaporan()
    {
        // 1. Jalankan validasi
        $validatedData = $this->validate();

        // 2. Proses upload gambar bukti (jika ada)
        $buktiImgId = null;
        if ($this->bukti) {
            // Simpan file ke 'storage/app/public/bukti' dan dapatkan path-nya
            $path = $this->bukti->store('bukti', 'public');

            // Simpan path ke tabel 'imgs'
            $newImg = img::create(['img_link' => $path]);
            $buktiImgId = $newImg->id;
        }

        // 3. Ambil psikolog secara acak
        $psikolog = User::where('role', 'psikolog')->where('status','=','Active')->inRandomOrder()->first();
        if (!$psikolog) {
            // Tindakan jika tidak ada psikolog di sistem
            session()->flash('error', 'Saat ini tidak ada psikolog yang tersedia.');
            return;
        }

        // 4. Buat Chatbox baru secara otomatis
        $chatbox = chatbox::create();

        // 5. Buat Laporan baru dengan semua data yang sudah disiapkan
        laporan::create([
            'judul' => $this->judul,
            'keterangan' => $this->keterangan,
            'id_korban' => auth()->user()->id,
            'id_psikolog' => $psikolog->id,
            'id_chatbox' => $chatbox->id,
            'bukti_img' => $buktiImgId,
            'status' => 'belum_dibaca', // Sesuai permintaan
            'balasan' => null,           // Sesuai permintaan
        ]);

        // 6. Redirect ke halaman dashboard korban dengan pesan sukses
        session()->flash('sukses', 'Laporan Anda telah berhasil dikirim dan akan segera ditinjau.');
        $this->redirectRoute('korban.dashboard', navigate: true);
    }
    public function render()
    {
        return view('livewire.korban.add-laporan');
    }
}
