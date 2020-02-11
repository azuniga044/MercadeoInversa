<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Oferta;
use Faker\Generator as Faker;

$factory->define(App\Oferta::class, function (Faker $faker) {
    return [
        'FechaEmision' => $faker->date('Y-m-d', 'now'),
        'busqueda' => $faker->text(200),
        'idCliente' => rand(1,20),
    ];
});
