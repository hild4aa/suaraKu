<?php

namespace App\Livewire\Admin;

use App\Models\img;
use App\Models\konten;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;

#[Layout('components.layouts.app_admin')]
#[Title('edukasi')]

class Edukasi extends Component
{
  use WithFileUploads;

    public $judul;
    public $keterangan;
    public $gambar;

    protected function rules()
    {
        return [
            'judul' => 'required|string|min:5',
            'keterangan' => 'required|string|min:10',
            'gambar' => 'required|image|max:2048',
        ];
    }

    /**
     * Method save yang sudah diperbarui dengan Database Transaction.
     */
    public function save()
    {
        $this->validate();
        $pathGambar = $this->gambar->store('edukasi','public');
        $newImg = img::create(['img_link' => $pathGambar]);

        konten::create([
            'judul' => $this->judul,
            'keterangan'=> $this->keterangan,
            'konten_img'=>$newImg->id]);

        session()->flash('message', 'Data edukasi berhasil ditambahkan.');
        $this->reset(['judul', 'keterangan', 'gambar']);

    }
    public function render()
    {
        return view('livewire.admin.edukasi');
    }
}
