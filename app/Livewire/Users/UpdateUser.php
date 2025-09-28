<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

#[Title('Edit User')]

class UpdateUser extends Component
{
    public User $user;
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $selectedRoles = [];
    public $title = 'Edit User';

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->selectedRoles = $user->roles->pluck('name')->toArray();
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user->id)],
            'password' => 'nullable|string|min:8|confirmed',
            'selectedRoles' => 'required|array|min:1',
        ];
    }

    protected $messages = [
        'name.required' => 'Nama wajib diisi.',
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email sudah digunakan.',
        'password.min' => 'Password minimal 8 karakter.',
        'password.confirmed' => 'Konfirmasi password tidak cocok.',
        'selectedRoles.required' => 'Pilih minimal satu role.',
        'selectedRoles.min' => 'Pilih minimal satu role.',
    ];

    public function save()
    {
        $this->validate();

        $updateData = [
            'name' => $this->name,
            'email' => $this->email,
        ];

        // Only update password if provided
        if (!empty($this->password)) {
            $updateData['password'] = Hash::make($this->password);
        }

        $this->user->update($updateData);

        // Sync roles
        $this->user->syncRoles($this->selectedRoles);

        session()->flash('message', 'User berhasil diperbarui!');
        
        return redirect()->route('users.index');
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.users.update-user', compact('roles'));
    }
}
