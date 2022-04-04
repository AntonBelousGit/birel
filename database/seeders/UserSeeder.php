<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->times(10)->create();
        User::create([
            'name'=>'admin',
            'surname'=> 'admin',
            'email'=>'admin@admin.com',
            'password' => '123',
        ]);
    }
}
