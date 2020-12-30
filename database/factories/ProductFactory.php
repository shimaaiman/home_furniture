<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker-> randomNumber(3),
        'description' => $faker->word,
        'Wire' => $faker->word,
        'Comdition' => $faker->word,
        'Shipping' => $faker->word,
        'Material' => $faker->word,
        'feature_image' => 'products/feature_images/img.jpg',
        'large_image' => 'products/large_image/img.jpg',
        'Measurments' => $faker-> randomNumber(3),
        'SKU number' => $faker-> randomNumber(3),
        'Warranty' => $faker-> randomNumber(3),
        'category_id' => \App\category::all()->random(),
        
        
        
    ];
});
