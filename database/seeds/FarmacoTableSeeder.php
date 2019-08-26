<?php

use Illuminate\Database\Seeder;
use App\Models\Laboratorio;

class FarmacoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Laboratorio::class,5)
        ->create()
        ->each(function ($laboratorio) {
            $laboratorio->farmacos()->save(factory(App\Models\Farmaco::class)->make());
        });
    }
}
