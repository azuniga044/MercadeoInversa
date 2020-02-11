<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Administrador;
use Faker\Generator as Faker;

$factory->define(App\Administrador::class, function (Faker $faker) {
    return [
        'cedula' => $faker->text(45),
        'nombre' => $faker->text(45),
        'apellido' => $faker->text(45),
        'direccion' => $faker->text(200),
        'telefono' => $faker->text(45),
        'idUsuario' => rand(1,2),
    ];
});
