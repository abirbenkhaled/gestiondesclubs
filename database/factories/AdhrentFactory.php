<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\adhrent;
use Faker\Generator as Faker;

$factory->define(adhrent::class, function (Faker $faker) {
    return [
        'id' => $faker->randomDigit,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'adresse_courriel' => $faker->safeEmail,
        'n°_cin' => $faker->randomNumber
        
    ];
});

