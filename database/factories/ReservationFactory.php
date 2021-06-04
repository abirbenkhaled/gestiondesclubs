<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;
use App\Club;
$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'workshops_name' => $faker->word,
        'nbr_adherant' => $faker->randomDigit,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'club_id'=>Club::get('id')->random(),
    ];
});
  