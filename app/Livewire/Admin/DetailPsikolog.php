<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.app_admin')] // <-- MENGGUNAKAN LAYOUT BARU
#[Title('detail_psikolog')]

class DetailPsikolog extends Component
{
    public $user_id;
    public $psikolog = [];

    public function mount($id)
    {
        $this->user_id = $id;
        $psikolog = User::findOrFail($id);
        $this->psikolog = $psikolog->toArray();
        $gambarSertifikat = $psikolog->sertifikatImg()->get()->toArray();
        $this->psikolog['sertifikat_psikolog_img'] = $gambarSertifikat[0]['img_link'];
    }

      public function verify()
    {
        $user = User::findOrFail($this->user_id);
        $user->status = 'Active';
        $user->save();
        session()->flash('message', 'Psikolog "' . $this->psikolog['name'] . '" telah berhasil diverifikasi.');
        return $this->redirect('/admin/dashboard', navigate: true);
    }

        public function delete()
    {
        $user = User::findOrFail($this->user_id);
        $user->delete();
        session()->flash('delete', 'Psikolog "' . $this->psikolog['name'] . '" telah dihapus.');
        return $this->redirect('/admin/dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.detail-psikolog');
    }
}
