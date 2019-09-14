<?php

use Illuminate\Database\Seeder;
use App\Models\Venta;
use App\Models\Vendedor;

class VentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ventas = factory(App\Models\Vendedor::class, 3)
       ->create()
       ->each(function($venta){
             $venta->vendedor()->save(factory(App\Models\Vendedor::class)->make());
       });

      

    }
}
  