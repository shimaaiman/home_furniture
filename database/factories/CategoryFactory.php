<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\category;
use Faker\Generator as Faker;

$factory->define(category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => \App\User::all()->random()
    ];
});
