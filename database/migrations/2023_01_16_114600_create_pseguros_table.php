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
        Schema::create('pseguros', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10)->unique();
            $table->string('descripcion',40)->unique();
            $table->decimal('valor',4,2);
            $table->boolean('vigente')->default(true);
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
        Schema::dropIfExists('pseguros');
    }
};
