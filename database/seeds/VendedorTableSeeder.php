   <?php

use Illuminate\Database\Seeder;
use App\Models\Vendedor;
use App\Models\Detalle;

class VendedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $vendedores = factory(App\Models\Vendedor::class, 3)
       ->create()
       ->each(function($vendedor){
             $venta = factory(App\Models\Venta::class)->make();
             $vendedor->ventas()->save($venta);
             $venta->detalles()->save(factory(App\Models\Detalle::class)->make());
                   
       });
    }
}


