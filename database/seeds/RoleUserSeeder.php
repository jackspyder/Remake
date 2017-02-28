<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    //function to seed initial role_user table with first registered user set to admin.
    public function run()
    {
        DB::table('role_user')->insert([
            ['role_id' => '1', 'user_id' => '1'],
            ['role_id' => '1', 'user_id' => '2'],
        ]);
    }
}
