<?php
namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout; 
use Livewire\Attributes\Title;



#[Layout('components.layouts.app_admin')] // <-- MENGGUNAKAN LAYOUT BARU
#[Title('Dashboard')]
class Dashboard extends Component
{

    public array $psikolog_inActive;
    public array $psikolog_active;


    public function render()
    {
        $semuaPsikolog = User::where('role', 'psikolog')->get();
        $this->psikolog_active = $semuaPsikolog->where('status', 'Active')->toArray();
        $this->psikolog_inActive = $semuaPsikolog->where('status', 'inActive')->toArray();

        return view('livewire.admin.dashboard');
    }
}
