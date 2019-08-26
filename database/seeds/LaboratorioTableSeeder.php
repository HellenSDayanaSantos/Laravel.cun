<?php

use Illuminate\Database\Seeder;
use App\Models\Laboratorio;

class LaboratorioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $laboratorios=[
        	'GENFAR',
        	'MK',
        	'LASANTE'
        ];

        foreach ($laboratorios as $laboratorio){
        	Laboratorio::create(['nombre' => $laboratorio]);
        }

    }
}
