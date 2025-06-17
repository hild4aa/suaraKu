<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

#[Layout('components.layouts.app')]
#[Title('Login')]
class Login extends Component
{
    // Ganti dari email ke username
    #[Rule('required|string')]
    public $username = '';

    #[Rule('required')]
    public $password = '';

    public function login()
    {
        // Validasi sekarang menggunakan username dan password
        $validated = $this->validate();

        // Auth::attempt juga menggunakan field 'username'
        if (Auth::attempt($validated)) {
            request()->session()->regenerate();

            $role = auth()->user()->role;

            switch ($role) {
                case 'admin':
                    return $this->redirect('/admin/dashboard', navigate: true);
                case 'psikolog':
                    return $this->redirect('/psikolog/dashboard', navigate: true);
                case 'korban':
                    return $this->redirect('/dashboard', navigate: true);
                default:
                    return $this->redirect('/dashboard', navigate: true);
            }
        }

        // Jika gagal, tampilkan error pada field username
        $this->addError('username', 'Username atau password yang Anda masukkan salah.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
