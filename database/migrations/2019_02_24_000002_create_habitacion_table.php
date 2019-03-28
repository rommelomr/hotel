<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('obsrvacion');
            $table->unsignedInteger('tipo_habitacion');
            $table->foreign('tipo_habitacion')->references('id')->on('tipo_habitacion');
            $table->integer('precio');//Precio de la habitacion
            $table->char('estado',1);//A:Activo I:Inactivo
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
        Schema::dropIfExists('habitaciones');
    }
}
