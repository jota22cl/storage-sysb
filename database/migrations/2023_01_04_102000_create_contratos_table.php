<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('folio',10)->unique();
            $table->unsignedBigInteger('cliente_id'); //tabla clientes
            $table->unsignedBigInteger('ccosto_id'); //tabla ccostos
            $table->unsignedBigInteger('bodega_id'); //tabla bodegas
            $table->date('fechaini');
            $table->date('fechafin');
            $table->double('gastocomun');
            $table->double('administracion');
            $table->double('primaseguro');
            $table->BigInteger('montoseguro');
            $table->unsignedBigInteger('moneda_id'); //tabla monedas
            $table->boolean('inventariable')->default(true);
            $table->boolean('vigente')->default(true);
            $table->timestamps();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('ccosto_id')->references('id')->on('ccostos');
            $table->foreign('bodega_id')->references('id')->on('bodegas');
            $table->foreign('moneda_id')->references('id')->on('monedas');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
};
