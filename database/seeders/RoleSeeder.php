<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Admin'
        ]);
        Role::create([
            'name'=>'User'
        ]);
        Role::create([
            'name'=>'Manager'
        ]);

        DB::table('role_user')->insert([
            [
                'user_id' => '1',
                'role_id' => '1',
            ],
        ]);
    }
}
