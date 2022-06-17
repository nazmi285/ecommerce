<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        $admin = Admin::firstOrCreate(
            ['email' => 'admin@email.com'],
            [   'name' => 'Superadmin', 
                'password' => Hash::make($password),
                'image_url' => '',
            ]
        );
    }
}
