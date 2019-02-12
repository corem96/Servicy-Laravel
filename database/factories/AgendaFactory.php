<?php

use Faker\Generator as Faker;

$factory->define(App\Agenda::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'start_at' => $faker->dateTime('now', null),
        'ends_at' => $faker->dateTimeBetween('now', '+3 months', null),
    ];
});
