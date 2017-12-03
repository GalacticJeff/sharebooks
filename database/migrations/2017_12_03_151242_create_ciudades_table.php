<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ciudad');
            $table->timestamps();
        });

        Schema::create('user_ciudad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user');
            $table->integer('ciudad');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('ciudad')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudades');
        Schema::dropIfExists('user_ciudad');
    }
}
