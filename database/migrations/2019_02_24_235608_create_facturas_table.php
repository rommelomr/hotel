<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_habitacion');

            $table->foreign('id_habitacion')->references('id')->on('habitaciones');

            $table->unsignedInteger('id_huesped');

            $table->foreign('id_huesped')->references('id')->on('huespedes');
            $table->timestamps();
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
