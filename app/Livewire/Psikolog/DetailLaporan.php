<?php

namespace App\Livewire\Psikolog;

use App\Models\laporan;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.app_psikolog')]
#[Title('dashboard')]
class DetailLaporan extends Component
{
    public array $laporan = [];

    public string $isiBalasan = '';
    public string $statusLaporan = '';

    public function mount(int $id)
    {
        $laporanObject = Laporan::with(['korban', 'bukti'])
            ->findOrFail($id);

        $this->laporan = [
            'id' => $laporanObject->id,
            'judul' => $laporanObject->judul,
            'keterangan' => $laporanObject->keterangan,
            'balasan' => $laporanObject->balasan,
            'status' => $laporanObject->status,
            'created_at' => Carbon::parse($laporanObject->created_at)->translatedFormat('l, d F Y H:i'),
            'nama_korban' => $laporanObject->korban?->name,
            'bukti_link' => $laporanObject->bukti ? asset('storage/' . $laporanObject->bukti->img_link) : null,
            'id_chatbox' => $laporanObject->id_chatbox
        ];

        $this->isiBalasan = $this->laporan['balasan'] ?? '';
        $this->statusLaporan = $this->laporan['status'] ?? 'process';
    }

    public function simpanBalasan()
    {
        // Validasi input
        $this->validate([
            'isiBalasan' => 'required|min:10',
            'statusLaporan' => 'required|in:process,selesai',
        ]);

        $laporan = Laporan::find($this->laporan['id']);

        $laporan->balasan = $this->isiBalasan;
        $laporan->status = $this->statusLaporan;
        $laporan->save();

        $this->mount($this->laporan['id']);

        $this->dispatch('balasan-disimpan', 'Balasan dan status berhasil diperbarui!');
    }

    public function render()
    {
        return view('livewire.psikolog.detail-laporan');
    }
}
