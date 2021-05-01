<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club;
use Faker\Generator as Faker;

$factory->define(Club::class, function (Faker $faker) {
    return [
        'club_name' => $faker->word,
        'nbr_adherant' => $faker->randomDigit,
        'categorie' => $faker->randomElements,
        'chair_name' => $faker->word
    ];
});
