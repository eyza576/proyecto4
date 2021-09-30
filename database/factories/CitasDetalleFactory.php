<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CitasDetalle;
use Faker\Generator as Faker;

$factory->define(CitasDetalle::class, function (Faker $faker) {

    return [
        'idcita' => $faker->randomDigitNotNull
    ];
});
