<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Detalle;
use App\Models\Venta;
use Faker\Generator as Faker;

$factory->define(App\Models\Detalle::class, function (Faker $faker) {
    return [
        'producto'=> [
            "nombre" =>$faker->name,
            "codigo"=>$faker->randomDigitNotNull,
            "fecha_vencimiento"=> $faker->date($format = 'Y-m-d', $max = 'now')
        ],
        'descripcion'=>$faker->paragraph,
        'venta_id' => function () {
        	return factory(App\Models\Venta::class)->create()->id;
        },
    ];
});
