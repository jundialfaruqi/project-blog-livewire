<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
        ]);

        User::factory()->create([
            'name' => 'Manager',
            'email' => 'manager@mail.com',
            'password' => Hash::make('admin123'),
        ]);

        User::factory()->create([
            'name' => 'Moderator',
            'email' => 'moderator@mail.com',
            'password' => Hash::make('admin123'),
        ]);

        User::factory()->create([
            'name' => 'Writer',
            'email' => 'writer@mail.com',
            'password' => Hash::make('admin123'),
        ]);

        $this->call(RolesAndPermissionsSeeder::class);
    }
}
