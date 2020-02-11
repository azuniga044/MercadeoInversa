<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'rif' => $faker->text(45),
        'nombre' => $title,
        'direccion' => $faker->text(200),
        'telefono' => $faker->text(45),
        'idLicencia' => rand(1,10),
        'idUsuario' => rand(1,20),
    ];
});
