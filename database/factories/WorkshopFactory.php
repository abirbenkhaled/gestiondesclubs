<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Workshop;
use Faker\Generator as Faker;
use App\Club;

$factory->define(Workshop::class, function (Faker $faker) {
    return [
        'workshops_name' => $faker->word,
        'nbr_adherant' => $faker->randomDigit,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'formateur_name' => $faker->word,
        'club_id'=>Club::get('id')->random(),

    ];
});
