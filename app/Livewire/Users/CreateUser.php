<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

#[Title('Tambah User Baru')]

class CreateUser extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $selectedRoles = [];
    public $title = 'Tambah User Baru';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'selectedRoles' => 'required|array|min:1',
    ];

    protected $messages = [
        'name.required' => 'Nama wajib diisi.',
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email sudah digunakan.',
        'password.required' => 'Password wajib diisi.',
        'password.min' => 'Password minimal 8 karakter.',
        'password.confirmed' => 'Konfirmasi password tidak cocok.',
        'selectedRoles.required' => 'Pilih minimal satu role.',
        'selectedRoles.min' => 'Pilih minimal satu role.',
    ];

    public function save()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole($this->selectedRoles);

        session()->flash('message', 'User berhasil ditambahkan!');
        
        return redirect()->route('users.index');
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.users.create-user', compact('roles'));
    }
}
