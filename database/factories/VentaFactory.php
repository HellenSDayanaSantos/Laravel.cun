<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Venta;
use App\Models\Vendedor;
use Faker\Generator as Faker;

$factory->define(App\Models\Venta::class, function (Faker $faker) {
    return [
         'fecha'=>$faker->date($format = 'Y-m-d', $max = 'now'),
         'is_credito'=>$faker->randomElement(array(0,1)),    
         'cantidad' => $faker->name,
         'telefono' => $faker->phoneNumber,
         'vendedor_id' => function () {
        	return factory(App\Models\Vendedor::class)->create()->id;
        }
        
    ];
});
