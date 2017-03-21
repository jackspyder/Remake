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
        $specs = factory(App\Models\Spec::class, 2)->create();
    }
}
