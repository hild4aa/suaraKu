<?php

namespace App\Livewire\Korban;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;



#[Layout('components.layouts.app_korban')]
#[Title('Dashboard')]
class Laporan extends Component
{
    public function render()
    {
        return view('livewire.korban.laporan');
    }
}
