<?php

namespace App\Livewire\Users;

use App\Models\User as UserModel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Data User')]

class User extends Component
{
    use WithPagination;

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
