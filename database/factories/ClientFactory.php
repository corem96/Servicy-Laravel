<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'mobile' => $faker->numberBetween($min = 1111111111, $max = 9999999999),
      'email' => $faker->email
    ];
});
