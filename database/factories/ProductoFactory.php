<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Producto::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'nombre' => $title,
        'marca' => $faker->text(45),
        'color' => $faker->text(45),
        'genero' => $faker->text(45),
        'fechaVencimiento' => $faker->date('Y-m-d', 'now'),
        'descripcion' => $faker->text(200),
        'idCategoria' => rand(1,20),
        'idEmpresa' => rand(1,20),
        'slug' => Str::slug($title),
    ];
});
