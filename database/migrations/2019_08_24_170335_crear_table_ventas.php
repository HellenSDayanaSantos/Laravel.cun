<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('cantidad');
            $table->string('telefono');
            $table->integer('vendedor_id')->unsigned();
            $table->integer('farmaco_id')->unsigned();
            $table->integer('cliente_id')->unsigned();

            $table->foreign('vendedor_id')
            ->references('id')
            ->on('vendedores');

            $table->foreign('farmaco_id')
            ->references('id')
            ->on('farmacos');

            $table->foreign('cliente_id')
            ->references('id')
            ->on('clientes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
