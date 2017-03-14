<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    //function to seed initial roles
    public function run()
    {
        DB::table('roles')->insert([
            [ 'role_slug' => 'admin', 'role_title' => 'Administrator' ], //role 1
            [ 'role_slug' => 'moderator', 'role_title' => 'Moderator' ], //role 2
            [ 'role_slug' => 'user', 'role_title' => 'User' ] //role 3
        ]);
    }
}
