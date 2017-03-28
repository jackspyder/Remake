<?php

use App\Models\Spec;
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
        Spec::create([
            'brand' => 'N/A',
            'model' => 'N/A',
        ]);
    }
}
