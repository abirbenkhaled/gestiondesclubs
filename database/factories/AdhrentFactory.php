<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Adhrent;
use Faker\Generator as Faker;
use App\Club;
$factory->define(adhrent::class, function (Faker $faker) {
    return [
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'adresse_courriel' => $faker->safeEmail,
        'n°_cin' => $faker->randomDigit,
        'club_id'=>Club::get('id')->random(),
        
    ];
});

