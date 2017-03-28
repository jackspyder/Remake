<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SpecsTableSeeder::class);
        //$this->call(ItemsTableSeeder::class);
        //$this->call(RolesTableSeeder::class);
        //$this->call(PermissionsTableSeeder::class);
        //$this->call(PermissionRoleSeeder::class);
        //$this->call(RoleUserSeeder::class);

    }
}
