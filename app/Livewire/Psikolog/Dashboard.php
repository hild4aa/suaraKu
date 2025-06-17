<?php

namespace App\Livewire\Psikolog;

use App\Models\laporan;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Auth;

#[Layout('components.layouts.app_psikolog')]
#[Title('dashboard')]
class Dashboard extends Component
{
  // Properti untuk menyimpan SEMUA laporan
    public array $semuaLaporan = [];

    // Properti untuk menyimpan status filter saat ini
    public string $filterStatus = 'semua'; // Default tampilkan semua

    public function mount()
    {
        $laporanCollection = Laporan::with('korban')
            ->where('id_psikolog', auth()->user()->id)
            ->latest() // Urutkan dari yang terbaru
            ->get();

        // Ubah koleksi menjadi array yang siap pakai untuk view
        $this->semuaLaporan = $laporanCollection->map(function ($laporan) {
            return [
                'id' => $laporan->id,
                'judul' => $laporan->judul,
                'status' => $laporan->status,
                'nama_korban' => $laporan->korban->name,
                // Gunakan Carbon untuk format waktu yang user-friendly
                'waktu_lalu' => Carbon::parse($laporan->created_at)->diffForHumans(),
            ];
        })->toArray();
    }

    // Method untuk mengubah filter
    public function setFilter(string $status)
    {
        $this->filterStatus = $status;
    }

    // Method helper untuk menentukan style badge berdasarkan status
    private function getBadgeInfo(string $status): array
    {
        return match ($status) {
            'process' => ['class' => 'bg-warning text-dark', 'text' => 'Proses'],
            'selesai' => ['class' => 'bg-success', 'text' => 'Selesai'],
            default => ['class' => 'bg-danger', 'text' => 'Belum Dibaca'],
        };
    }

    public function render()
    {
        // Filter data berdasarkan $filterStatus sebelum dikirim ke view
        $filteredLaporan = ($this->filterStatus === 'semua')
            ? $this->semuaLaporan
            : array_filter($this->semuaLaporan, fn($laporan) => $laporan['status'] === $this->filterStatus);

        return view('livewire.psikolog.dashboard', [
            'laporan' => $filteredLaporan,
            'getBadgeInfo' => fn(string $status) => $this->getBadgeInfo($status)
        ]);
    }
}
