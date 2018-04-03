<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa', 6);
            $table->string('color', 100);
            $table->string('marca', 100);
            $table->enum('tipo_vehiculo', ['particular', 'publico']);
            
            $table->unsignedInteger('conductor_id');
            $table->foreign('conductor_id')->references('id')->on('conductors');

            $table->unsignedInteger('propietario_id');
            $table->foreign('propietario_id')->references('id')->on('propietarios');            
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
        Schema::dropIfExists('vehiculos');
    }
}
