<?php

namespace App\Livewire\Psikolog;

use App\Models\messege;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.app_psikolog')]
#[Title('chatbox')]

class Chatbox extends Component
{
    public $chat_id;
    public $chatbox;
    public $messeges = [];

    // Properti untuk menampung input pesan baru
    public string $pesanBaru = '';

    public function mount($id)
    {
        $this->chat_id = $id;
        $this->loadMessages();
    }

    public function loadMessages()
    {
        // Eager load relasi 'messeges' dan sub-relasi 'pengirim'
        $this->chatbox = \App\Models\chatbox::with('messeges.pengirim')->find($this->chat_id);

        if ($this->chatbox) {
            $this->messeges = $this->chatbox->messeges;
        }
    }

    // Method untuk mengirim pesan
    public function kirimPesan()
    {
        // Validasi agar pesan tidak kosong
        $this->validate(['pesanBaru' => 'required|string']);

        // Simpan pesan baru ke database
        messege::create([
            'id_chatbox' => $this->chat_id,
            'id_user' => auth()->id(),
            'messege' => $this->pesanBaru,
        ]);

        // Kosongkan kembali input field
        $this->reset('pesanBaru');

        // Muat ulang pesan agar pesan baru langsung tampil
        $this->loadMessages();

        // Kirim event ke browser untuk trigger auto-scroll
        $this->dispatch('pesanTerkirim');
    }

    public function render()
    {
        return view('livewire.psikolog.chatbox');
    }
}
