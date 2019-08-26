<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Farmaco;
use Faker\Generator as Faker;

$factory->define(Farmaco::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence(10),
        'descripcion' => $faker->name,
        'laboratorio_id' => function () {
        	return factory(App\Models\Laboratorio::class)->create()->id;
        }
    ];
});
