<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    //function to seed initial roles
    public function run()
    {
        DB::table('roles')->insert([
            ['role_name' => 'admin', 'role_label' => 'Administrator'], //role 1
            ['role_name' => 'moderator', 'role_label' => 'Moderator'], //role 2
            ['role_name' => 'user', 'role_label' => 'User'] //role 3
        ]);
    }
}
