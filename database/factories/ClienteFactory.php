<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'cedula' => $faker->text(45),
        'nombre' => $title,
        'apellido' => $faker->text(45),
        'direccion' => $faker->text(200),
        'telefono' => $faker->text(45),
        'idlicencia' => rand(1,5),
        'idUsuario' => rand(1,20),


    ];
});
