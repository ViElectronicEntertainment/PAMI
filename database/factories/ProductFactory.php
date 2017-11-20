<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(pami\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'short' => $faker->text(140),
        'body' => $faker->text(900),
    ];
});
