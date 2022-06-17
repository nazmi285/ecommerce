<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrCreate(
            ['name' => 'Owner'],
            ['guard_name' => 'web']
        );

        $role = Role::firstOrCreate(
            ['name' => 'Member'],
            ['guard_name' => 'web']
        );



        $role = Role::firstOrCreate(
            ['name' => 'Superadmin'],
            ['guard_name' => 'admin']
        );
    }
}
