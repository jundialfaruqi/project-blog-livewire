<?php

namespace App\Livewire\Roles;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Tambah Role Baru')]

class CreateRole extends Component
{
    public $name = '';
    public $selectedPermissions = [];
    public $title = 'Tambah Role Baru';

    protected $rules = [
        'name' => 'required|string|max:255|unique:roles,name',
        'selectedPermissions' => 'required|array|min:1',
    ];

    protected $messages = [
        'name.required' => 'Nama role wajib diisi.',
        'name.unique' => 'Nama role sudah digunakan.',
        'selectedPermissions.required' => 'Pilih minimal satu permission.',
        'selectedPermissions.min' => 'Pilih minimal satu permission.',
    ];

    public function save()
    {
        // Check authorization
        $this->authorize('create', Role::class);
        
        // Validation errors will be handled by Livewire automatically
        $this->validate();

        try {
            $role = Role::create([
                'name' => $this->name,
                'guard_name' => 'web',
            ]);

            $role->givePermissionTo($this->selectedPermissions);

            // Session flash for toast on redirect page
            session()->flash('success', 'Role berhasil ditambahkan!');
            
            return redirect()->route('roles.index');
            
        } catch (\Exception $e) {
            // Only show toast for system errors, not validation errors
            session()->flash('error', 'Gagal menambahkan role: ' . $e->getMessage());
        }
    }

    public function render()
    {
        $permissions = Permission::all();
        $groupedPermissions = $this->groupPermissions($permissions);
        return view('livewire.roles.create-role', compact('groupedPermissions'));
    }

    private function groupPermissions($permissions)
    {
        $grouped = [];
        
        foreach ($permissions as $permission) {
            $name = $permission->name;
            
            // Tentukan kelompok berdasarkan kata kunci
            if (str_contains($name, 'user')) {
                $group = 'User Management';
            } elseif (str_contains($name, 'role')) {
                $group = 'Role Management';
            } elseif (str_contains($name, 'permission')) {
                $group = 'Permission Management';
            } elseif (str_contains($name, 'article')) {
                $group = 'Article Management';
            } else {
                $group = 'Other Permissions';
            }
            
            if (!isset($grouped[$group])) {
                $grouped[$group] = [];
            }
            
            $grouped[$group][] = $permission;
        }
        
        // Urutkan kelompok berdasarkan prioritas
        $orderedGroups = [];
        $groupOrder = ['User Management', 'Role Management', 'Permission Management', 'Article Management', 'Other Permissions'];
        
        foreach ($groupOrder as $groupName) {
            if (isset($grouped[$groupName])) {
                $orderedGroups[$groupName] = $grouped[$groupName];
            }
        }
        
        // Tambahkan kelompok lain yang mungkin tidak ada dalam urutan
        foreach ($grouped as $groupName => $permissions) {
            if (!isset($orderedGroups[$groupName])) {
                $orderedGroups[$groupName] = $permissions;
            }
        }
        
        return $orderedGroups;
    }
}