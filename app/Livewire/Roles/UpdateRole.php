<?php

namespace App\Livewire\Roles;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Illuminate\Validation\Rule;

#[Title('Edit Role')]

class UpdateRole extends Component
{
    #[Locked]
    public Role $role;
    public $name = '';
    public $selectedPermissions = [];
    public $title = 'Edit Role';

    public function mount(Role $role)
    {
        // Authorization check
        $this->authorize('update', $role);
        
        $this->role = $role;
        $this->name = $role->name;
        $this->selectedPermissions = $role->permissions->pluck('name')->toArray();
    }

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', Rule::unique('roles')->ignore($this->role->id)],
            'selectedPermissions' => 'required|array|min:1',
            'selectedPermissions.*' => 'exists:permissions,name',
        ];
    }

    protected $messages = [
        'name.required' => 'Nama role wajib diisi.',
        'name.unique' => 'Nama role sudah digunakan.',
        'selectedPermissions.required' => 'Pilih minimal satu permission.',
        'selectedPermissions.min' => 'Pilih minimal satu permission.',
        'selectedPermissions.*.exists' => 'Permission yang dipilih tidak valid.',
    ];

    public function save()
    {
        // Authorization check
        $this->authorize('update', $this->role);
        
        // Validation errors will be handled by Livewire automatically
        $this->validate();

        try {
            $this->role->update([
                'name' => $this->name,
            ]);

            // Sync permissions
            $this->role->syncPermissions($this->selectedPermissions);

            // Session flash for toast on redirect page
            session()->flash('success', 'Role berhasil diperbarui!');
            
            return redirect()->route('roles.index');
            
        } catch (\Exception $e) {
            // Only show toast for system errors, not validation errors
            session()->flash('error', 'Gagal memperbarui role: ' . $e->getMessage());
        }
    }

    public function render()
    {
        $permissions = Permission::all();
        $groupedPermissions = $this->groupPermissions($permissions);
        return view('livewire.roles.update-role', compact('groupedPermissions'));
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
