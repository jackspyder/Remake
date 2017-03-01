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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->unique(),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Spec::class, function () {
    return [
        'cpu' => str_random(10),
        'ram' => str_random(10),
        'hdd' => str_random(10),
        'odd' => str_random(10),
        'gpu' => str_random(10),
        'battery' => str_random(10),
        'usb' => str_random(10),
        'lan' => str_random(10),
        'wlan' => str_random(10),
        'os' => str_random(10),
        'psu' => str_random(10),
        'screen_size' => 1.1,
        'screen_rez' => str_random(10),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
        'deleted_at' => null,
    ];
});

$factory->define(App\Models\Item::class, function () {
    return [
        'spec_id' => rand(1, 20),
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
