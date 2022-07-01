<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use App\Models\UserSettingNotification;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create()->each(function ($user){
            $user->userSettingNotifications()->create([
                'user_id' => $user->id,
            ]);
        });

       $admin_lc =  User::create([
            'name'=>'admin',
            'surname'=> 'admin',
            'email'=>'admin@admin.com',
            'password' => Hash::make('123'),
        ]);

       UserSettingNotification::create(['user_id'=>$admin_lc->id]);
    }
}
