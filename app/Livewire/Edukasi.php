<?php

namespace App\Livewire;

use App\Models\konten;
use Livewire\Component;

class Edukasi extends Component
{
    public $konten = [] ;

    public function mount(){
    $kontenCollection = Konten::with('kontenImg')->latest()->get();

    // 2. Gunakan map() untuk mengubah setiap item dalam collection
    $this->konten = $kontenCollection->map(function ($item) {

        // Buat array baru untuk setiap item sesuai format yang Anda inginkan
        return [
            'id' => $item->id,
            'judul' => $item->judul,
            'keterangan' => $item->keterangan,
            'konten_img' => $item->kontenImg?->img_link,
            'created_at' => $item->created_at,
            'updated_at' => $item->updated_at,
        ];

    })->toArray(); // 3. Setelah selesai diubah, baru konversi ke array
}

    public function render()
    {
        return view('livewire.edukasi');
    }
}
