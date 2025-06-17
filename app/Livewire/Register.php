<?php

namespace App\Livewire;

use App\Models\Img;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
      use WithFileUploads;

    public string $email = '';
    public string $password = '';
    public string $selectedRole = '';
    public string $nama_psikolog = '';
    public string $ktp_psikolog = '';
    public $sertifikat_psikolog;
    public string $nama_korban = '';
    public string $jenis_kelamin = '';
    public string $umur = '';
    public $foto_korban;
     public string $username;
    protected function rules()
    {
        $rules = [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'selectedRole' => 'required|in:psikolog,korban',
        ];

        if ($this->selectedRole === 'psikolog') {
            $rules['nama_psikolog'] = 'required|string|max:255';
            $rules['sertifikat_psikolog'] = 'required|image|max:2048'; // Wajib untuk psikolog
            $rules['ktp_psikolog'] = 'nullable|string|max:25';
        }

        if ($this->selectedRole === 'korban') {
            $rules['nama_korban'] = 'required|string|max:255';
            $rules['jenis_kelamin'] = 'required|in:L,P'; // Sesuaikan dengan value di DB
            $rules['umur'] = 'required|integer|min:1';
            $rules['foto_korban'] = 'nullable|image|max:2048'; // Opsional
        }

        return $rules;
    }

    public function register()
    {
        $this->validate();

        $userData = [
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->selectedRole,
        ];

        if ($this->selectedRole === 'psikolog') {
            $path = $this->sertifikat_psikolog->store('sertifikat', 'public');
            $img = Img::create(['img_link' => $path]);
            $userData['name'] = $this->nama_psikolog;
            $userData['username'] = $this->username;
            $userData['noKtp'] = $this->ktp_psikolog;
            $userData['sertifikat_psikolog_img'] = $img->id;
            $userData['status'] = 'inActive';
        }

        if ($this->selectedRole === 'korban') {
            $imgId = null;
            if ($this->foto_korban) {
                $path = $this->foto_korban->store('avatars', 'public');
                $img = Img::create(['img_link' => $path]);
                $imgId = $img->id;
            }

            $userData['name'] = $this->nama_korban;
            $userData['username'] = strtolower(str_replace(' ', '', $this->nama_korban)) . rand(10, 99);
            $userData['jenis_kelamin'] = $this->jenis_kelamin;
            $userData['status'] = 'Active';
        }

        $user = User::create($userData);

        Auth::login($user);

        if ($user->role === 'psikolog') {
            return $this->redirectRoute('psikolog.dashboard', navigate: true);
        }

        return $this->redirectRoute('korban.dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
