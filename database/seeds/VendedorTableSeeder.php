<?php

use Illuminate\Database\Seeder;
use App\Models\Vendedor;

class VendedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vendedor::class, 3)->create(); 
    }
}
