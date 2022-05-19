<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(SettingSeeder::class);
        //$this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);

        AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "admin@admin.com",
            "password" => "123",
        ]);
    }
}
