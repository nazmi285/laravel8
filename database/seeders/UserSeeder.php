<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\Admin::firstOrCreate(
            ['email' => 'admin@email.com'],
            [   'name' => 'Superadmin', 
                'password' => Hash::make('admin@email.com'),
            ]
        );

        $user = \App\Models\User::firstOrCreate(
            ['email' => 'user@email.com'],
            [   'name' => 'User', 
                'password' => Hash::make('user@email.com'),
            ]
        );
    }
}
