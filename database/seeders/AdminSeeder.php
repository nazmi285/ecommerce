<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = 'admin@email.com';

        $admin = \App\Admin::firstOrCreate(
            ['email' => 'admin@email.com'],
            [   'name' => 'Superadmin', 
                'password' => Hash::make($password),
                'image_url' => '',
            ]
        );
    }
}
