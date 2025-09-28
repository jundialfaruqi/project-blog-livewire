<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'view-user']);
        Permission::create(['name' => 'create-role']);
        Permission::create(['name' => 'view-role']);
        Permission::create(['name' => 'edit-role']);
        Permission::create(['name' => 'delete-role']);
        Permission::create(['name' => 'create-permission']);
        Permission::create(['name' => 'view-permission']);
        Permission::create(['name' => 'edit-permission']);
        Permission::create(['name' => 'delete-permission']);
        Permission::create(['name' => 'assign-role-to-user']);
        Permission::create(['name' => 'assign-permission-to-role']);
        Permission::create(['name' => 'create-article']);
        Permission::create(['name' => 'view-article']);
        Permission::create(['name' => 'edit-article']);
        Permission::create(['name' => 'delete-article']);
        Permission::create(['name' => 'publish-article']);
        Permission::create(['name' => 'unpublish-article']);

        // update cache to know about the newly created permissions (required if using WithoutModelEvents in seeders)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'writer']);
        $role->givePermissionTo('create-article', 'view-article', 'edit-article');

        // or may be done by chaining
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['publish-article', 'unpublish-article', 'create-article', 'view-article', 'edit-article']);

        $role = Role::create(['name' => 'manager'])
            ->givePermissionTo(['view-user', 'view-article']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        // Assign roles to users
        $user = \App\Models\User::find(1);
        $user->assignRole('admin');
        
        $user = \App\Models\User::find(2);
        $user->assignRole('manager');
        
        $user = \App\Models\User::find(3);
        $user->assignRole('moderator');
        
        $user = \App\Models\User::find(4);
        $user->assignRole('writer');
    }
}
