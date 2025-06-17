<?php

namespace App\Livewire\Psikolog;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.app_psikolog')]
#[Title('dashboard')]
class Dashboard extends Component
{
    public $laporan = []; // Inisialisasi sebagai array kosong
    public $id;
    public $status ;

    public function mount()
    {
        // Asumsi $this->id sudah berisi ID korban yang login
        $this->id = auth()->id();
        $this->status = auth()->user()->status;

    }


    public function render()
    {
        return view('livewire.psikolog.dashboard');
    }
}
