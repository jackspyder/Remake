<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->unique(),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Item::class, function () {
    return [
        'category' => str_random(10),
        'weight' => rand(1, 20),
        'condition' => 'condition',
        'status' => str_random(10),
        'notes' => str_random(20),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
        'deleted_at' => null,
    ];
});
