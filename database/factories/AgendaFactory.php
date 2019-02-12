<?php

use Faker\Generator as Faker;

$factory->define(App\Agenda::class, function (Faker $faker) {
    $startDate = $faker->dateTime('now', null);

    return [
        'user_id' => $faker->random_int(1, 10),
        'start_at' => $startDate,
        'ends_at' => $faker->$faker->dateTimeBetween($startDate, '+ 3 months', null),
    ];
});
