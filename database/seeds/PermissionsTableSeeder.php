<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    //function to seed initial permissions
    public function run()
    {
        DB::table('permissions')->insert([
            ['perm_name' => 'view_items', 'perm_label' => 'View Items'],
            ['perm_name' => 'add_items', 'perm_label' => 'Add Items'],
            ['perm_name' => 'edit_items', 'perm_label' => 'Edit Items'],
            ['perm_name' => 'remove_items', 'perm_label' => 'Remove Items'],

            ['perm_name' => 'view_members', 'perm_label' => 'View Members'],
            ['perm_name' => 'add_members', 'perm_label' => 'Add Members'],
            ['perm_name' => 'edit_members', 'perm_label' => 'Edit Members'],
            ['perm_name' => 'remove_members', 'perm_label' => 'Remove Members'],
        ]);
    }
}
