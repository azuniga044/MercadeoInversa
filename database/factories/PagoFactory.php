<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pago;
use Faker\Generator as Faker;

$factory->define(App\Pago::class, function (Faker $faker) {
    return [
        'fecha' => $faker->date('Y-m-d', 'now'),
        'costo' => $faker->randomFloat(NULL, 0, 200),
        'idLicencia' => rand(1,20),
    ];
});
