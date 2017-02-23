<?php

use Illuminate\Database\Seeder;

class SpecsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $specs = factory(App\Specs::class, 50)->make();
    }
}
