<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role = Role::firstOrCreate(
            ['name' => 'Admin'],
            [   
                'guard_name' => 'web',
            ]
        );
        $Role = Role::firstOrCreate(
            ['name' => 'Member'],
            [
                'guard_name' => 'web', 
            ]
        );

        $Permission = Permission::firstOrCreate(
            ['name' => 'Edit'],
            [   
                'guard_name' => 'web', 
            ]
        );
        $Permission = Permission::firstOrCreate(
            ['name' => 'Create'],
            [   
                'guard_name' => 'web', 
            ]
        );

    }
}
