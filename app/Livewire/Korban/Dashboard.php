<?php

namespace App\Livewire\Korban;

use App\Models\laporan;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.app_korban')]
#[Title('Dashboard')]
class Dashboard extends Component

{
public $laporan = []; // Inisialisasi sebagai array kosong
    public $id;

    public function mount()
    {
        // Asumsi $this->id sudah berisi ID korban yang login
        $this->id = auth()->id();

        // 1. Query yang efisien dengan Eager Loading untuk mengambil relasi
        $laporanObject = Laporan::with(['korban', 'psikolog', 'bukti'])
            ->where('id_korban', $this->id)
            ->where('status', '!=', 'selesai')
            ->latest() // Mengambil laporan terbaru
            ->first();


        // 2. Cek apakah laporan ditemukan
        if ($laporanObject) {
            // 3. Transformasi objek Eloquent menjadi array yang Anda inginkan
            $this->laporan = [
                'id' => $laporanObject->id,
                'judul' => $laporanObject->judul,
                'keterangan' => $laporanObject->keterangan,
                'balasan' => $laporanObject->balasan,
                'status' => $laporanObject->status,
                'created_at' => $laporanObject->created_at,
                'updated_at' => $laporanObject->updated_at,
                'nama_korban' => $laporanObject->korban?->name,
                'nama_psikolog' => $laporanObject->psikolog?->name,
                'bukti_link' => $laporanObject->bukti ? asset('storage/' . $laporanObject->bukti->img_link) : null,
                'id_chatbox' => $laporanObject->id_chatbox
            ];
        }

       // dd($this->laporan); // Hapus atau aktifkan untuk debugging
    }    public function render()
    {
        return view('livewire.korban.dashboard');
    }
}
