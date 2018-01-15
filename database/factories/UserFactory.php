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

$factory->define(pami\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'leadership' => rand(1,10),
        'innovation' => rand(1,10),
        'teamwork' => rand(1,10),
        'management' => rand(1,10),
        'design' => rand(1,10),
        'development' => rand(1,10),
        'problemresolution' => rand(1,10),
        'sales' => rand(1,10),
        'communication' => rand(1,10),
        'community' => rand(1,10),
        'level' => rand(1,10),
        'experience' => rand(1,10),
        'remember_token' => str_random(10),
    ];
});
