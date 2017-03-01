<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         \App\Models\User::create(
             array(
                 'name' => 'Admin',
                 'username' => 'Admin',
                 'password' => bcrypt('secret')
             )
         );
     }
}
