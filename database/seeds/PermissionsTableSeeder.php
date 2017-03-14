<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    //function to seed initial permissions
    public function run()
    {
        DB::table('permissions')->insert([
            [ 'permission_slug' => 'view_items', 'permission_title' => 'View Items' ], //permission 1
            [ 'permission_slug' => 'add_items', 'permission_title' => 'Add Items' ], //permission 2
            [ 'permission_slug' => 'edit_items', 'permission_title' => 'Edit Items' ], //permission 3
            [ 'permission_slug' => 'remove_items', 'permission_title' => 'Remove Items' ], //permission 4

            [ 'permission_slug' => 'view_members', 'permission_title' => 'View Members' ], //permission 5
            [ 'permission_slug' => 'add_members', 'permission_title' => 'Add Members' ], //permission 6
            [ 'permission_slug' => 'edit_members', 'permission_title' => 'Edit Members' ], //permission 7
            [ 'permission_slug' => 'remove_members', 'permission_title' => 'Remove Members' ], //permission 8
        ]);
    }
}
