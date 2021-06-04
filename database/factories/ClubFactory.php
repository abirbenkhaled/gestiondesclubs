<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club;
use Faker\Generator as Faker;

$factory->define(club::class, function (Faker $faker) {
    return [
       
        'club_name' => $faker->word,
        'nbr_adherant' => $faker->randomDigit,
        'categorie'=>$faker->randomElement(['scientifique','culturelle','artistique']),
        'chair_name'=>$faker->word,
    ];
});  


