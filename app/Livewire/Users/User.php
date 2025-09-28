<?php

namespace App\Livewire\Users;

use App\Models\User as UserModel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

#[Title('Data User')]

class User extends Component
{
    use WithPagination;

    public function deleteUser($userId)
    {
        try {
            $user = UserModel::findOrFail($userId);
            
            // Check authorization using the UserPolicy
            $this->authorize('delete', $user);
            
            // Prevent user from deleting themselves
            if ($user->id === Auth::id()) {
                session()->flash('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
                return;
            }
            
            $userName = $user->name;
            $user->delete();
            
            session()->flash('success', "User '{$userName}' berhasil dihapus.");
            
        } catch (\Illuminate\Auth\Access\AuthorizationException $e) {
            session()->flash('error', 'Anda tidak memiliki izin untuk menghapus user ini.');
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan saat menghapus user.');
        }
    }

    public function render()
    {
        $users = UserModel::with('roles')->select('id', 'name', 'email')->paginate(10);
        
        // Statistics data
        $totalUsers = UserModel::count();
        $newUsers = UserModel::where('created_at', '>=', now()->subDays(30))->count();
        $writerModerators = UserModel::whereHas('roles', function($query) {
            $query->whereIn('name', ['writer', 'moderator']);
        })->count();
        
        return view('livewire.users.user', compact('users', 'totalUsers', 'newUsers', 'writerModerators'));
    }
}
