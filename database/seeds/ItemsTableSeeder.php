<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('items')->insert([
           'category' => 'Cat1',
           'weight' => '12',
           'condition' => 'Good',
           'status' => 'status1',
           'notes' => 'some notes!'
         ]);
     }
}
