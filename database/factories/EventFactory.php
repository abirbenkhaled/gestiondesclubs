<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use App\Club;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'recepteur' => $faker->word,
        'destinataire' => $faker->word,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sujet' => now(),
        'club_id'=>Club::get('id')->random(),
       ];
      });
