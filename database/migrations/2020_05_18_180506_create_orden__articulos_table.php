<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden__articulos', function (Blueprint $table) {
            $table->unsignedBigInteger('orden_id');
            $table->unsignedBigInteger('articulo_id');
            $table->integer('cantidad');
            $table->timestamps();
            $table->foreign('orden_id')->references('id')->on('ordens');
            $table->foreign('articulo_id')->references('id')->on('articulos');
            $table->primary('orden_id', 'articulo_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden__articulos');
    }
}
