<?php

use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    //function to seed initial permission_role pivot table
    public function run()
    {
        DB::table('permission_role')->insert([
            //Assign Permissions to Admin Role
            ['permission_id' => '1', 'role_id' => '1'],
            ['permission_id' => '2', 'role_id' => '1'],
            ['permission_id' => '3', 'role_id' => '1'],
            ['permission_id' => '4', 'role_id' => '1'],
            ['permission_id' => '5', 'role_id' => '1'],
            ['permission_id' => '6', 'role_id' => '1'],
            ['permission_id' => '7', 'role_id' => '1'],
            ['permission_id' => '8', 'role_id' => '1'],
            //Assign Permissions to Moderator Role
            ['permission_id' => '1', 'role_id' => '2'],
            ['permission_id' => '2', 'role_id' => '2'],
            ['permission_id' => '3', 'role_id' => '2'],
            ['permission_id' => '5', 'role_id' => '2'],
            ['permission_id' => '7', 'role_id' => '2'],
            //Assign Permissions to User Role
            ['permission_id' => '1', 'role_id' => '3'],
            ['permission_id' => '2', 'role_id' => '3']
        ]);
    }
}
