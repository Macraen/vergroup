<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permissions = [
            'user_create',
            'user_edit',
            'user_show',
            'user_delete',
            'main_edit',
            'permission_admin_panel'
        ];

        foreach ($permissions as $permission)   {
            Permission::create([
                'name' => $permission
            ]);
        }

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        Role::create(['name' => 'user']);

        $user = Role::create(['name' => 'admin']);

        $userPermissions = [
            'user_create',
            'user_edit',
            'user_show',
            'user_delete',
            'main_edit',
            'permission_admin_panel'
        ];

        foreach ($userPermissions as $permission)   {
            $user->givePermissionTo($permission);
        }

        $moderator = Role::create(['name' => 'moderator']);

        $moderatorPermissions = [
            'main_edit',
            'permission_admin_panel'
        ];

        foreach ($moderatorPermissions as $permission)   {
            $moderator->givePermissionTo($permission);
        }
    }
}
