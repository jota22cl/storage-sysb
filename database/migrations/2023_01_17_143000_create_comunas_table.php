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
        Schema::create('comunas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10)->unique();
            $table->string('nombre',40)->unique();
            $table->unsignedBigInteger('ciudad_id'); //llave foranea
            $table->boolean('vigente')->default(true);
            $table->timestamps();
            //llave foranea
            $table->foreign('ciudad_id')->references('id')->on('ciudads');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunas');
    }
};
