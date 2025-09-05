<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Author', 'Editor', 'Subscriber', 'Administrator'];

        foreach ($roles as $role) {
            \App\Models\Role::firstOrCreate(['name' => $role]);
        }
    }
}
