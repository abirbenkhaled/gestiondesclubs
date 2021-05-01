<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'workshops_name' => $faker->word,
        'nbr_adherant' => $faker->randomDigit,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
