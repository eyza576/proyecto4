<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usurio;
use Faker\Generator as Faker;

$factory->define(Usurio::class, function (Faker $faker) {

    return [
        'apellido' => $faker->word,
        'nombre' => $faker->word,
        'usurio' => $faker->word,
        'password' => $faker->word
    ];
});
