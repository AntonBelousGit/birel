<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::create([
            'name' => 'Representative'
        ]);
        UserType::create([
            'name' => 'Individual'
        ]);

        DB::table('user_user_type')->insert([
            [
                'user_id' => '1',
                'user_type_id' => '1',
            ],
        ]);
    }
}
