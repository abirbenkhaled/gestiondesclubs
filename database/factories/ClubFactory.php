<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\club;
use Faker\Generator as Faker;

$factory->define(club::class, function (Faker $faker) {
    return [
       
        'club_name' => $faker->words,
        'nbr_adherant' => $faker->randomDigit,
        
        'created_at' => now()
    ];
});
