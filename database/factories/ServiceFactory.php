<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->text,
        'price' => $faker->randomFloat(2, 0, null)
    ];
});
