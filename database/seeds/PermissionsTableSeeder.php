<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    //function to seed initial permissions
    public function run()
    {
        DB::table('permissions')->insert([
            ['perm_name' => 'view_items', 'perm_label' => 'View Items'], //permission 1
            ['perm_name' => 'add_items', 'perm_label' => 'Add Items'], //permission 2
            ['perm_name' => 'edit_items', 'perm_label' => 'Edit Items'], //permission 3
            ['perm_name' => 'remove_items', 'perm_label' => 'Remove Items'], //permission 4

            ['perm_name' => 'view_members', 'perm_label' => 'View Members'], //permission 5
            ['perm_name' => 'add_members', 'perm_label' => 'Add Members'], //permission 6
            ['perm_name' => 'edit_members', 'perm_label' => 'Edit Members'], //permission 7
            ['perm_name' => 'remove_members', 'perm_label' => 'Remove Members'], //permission 8
        ]);
    }
}
