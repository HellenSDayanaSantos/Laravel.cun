<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(LaboratorioTableSeeder::class);
        $this->call(VendedorTableSeeder::class);
        //$this->call(FarmacoTableSeeder::class);
        //$this->call(ClienteTableSeeder::class);
       // $this->call(VentaTableSeeder::class);
    }
}
