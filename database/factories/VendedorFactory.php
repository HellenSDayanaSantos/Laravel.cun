<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vendedor;
use Faker\Generator as Faker;

$factory->define(App\Models\Vendedor::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'direccion'=>$faker->address,
        'telefono'=>$faker->phoneNumber,
    ];
});
