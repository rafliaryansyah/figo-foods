<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Welcome;
use Faker\Generator as Faker;

$factory->define(App\Welcome::class, function (Faker $faker) {
    return [
        'image' => $faker->image,
        'title' => $faker->title,
        'description' => $faker->paragraphs()
    ];
});
