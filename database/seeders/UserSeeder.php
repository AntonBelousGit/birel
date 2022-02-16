<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'admin',
            'surname'=> 'admin',
            'email'=>'admin@admin.com',
            'password' => '123',
        ]);
    }
}
