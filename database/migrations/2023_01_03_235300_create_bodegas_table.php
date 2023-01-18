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
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10)->unique();
            $table->string('descripcion',30);
            $table->unsignedBigInteger('ccosto_id');
            $table->decimal('largo',4,2);
            $table->decimal('ancho',4,2);
            $table->decimal('mt2',4,2);
            $table->boolean('bodegacompartida')->default(false);
            $table->boolean('bodegaocupada')->default(false);
            $table->boolean('vigente')->default(true);
            $table->timestamps();
            $table->foreign('ccosto_id')->references('id')->on('ccostos');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bodegas');
    }
};
