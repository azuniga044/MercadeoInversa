<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Categoria::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'nombre' => $title,
        'descripcion' => $faker->text(255),
        'slug' => Str::slug($title),
    
    ];
});
