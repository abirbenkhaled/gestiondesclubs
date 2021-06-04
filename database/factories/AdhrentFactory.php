<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Adhrent;
use Faker\Generator as Faker;
use App\Club;
$factory->define(adhrent::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'adresse_courriel' => $faker->safeEmail,
        'n°_cin' => $faker->randomNumber,
        'club_id'=>Club::get('id')->random(),
        
    ];
});

