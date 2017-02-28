<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    //function to seed initial roles
    public function run()
    {
        DB::table('roles')->insert([
            ['role_name' => 'admin', 'role_label' => 'Administrator'],
            ['role_name' => 'moderator', 'role_label' => 'Moderator'],
            ['role_name' => 'user', 'role_label' => 'User']
        ]);
    }
}
