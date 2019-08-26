<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Laboratorio;
use Faker\Generator as Faker;

$factory->define(Laboratorio::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
    ];
});
