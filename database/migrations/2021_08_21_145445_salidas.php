<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Salidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->string('conductor');
            $table->longText('FechayHoraSalida')->nullable();
            $table->longText('LecturaOdometroSalida')->nullable();
            $table->longText('NivelCombustibleSalida')->nullable();
            $table->longText('VigilanteSalida')->nullable();
            $table->longText('ObservacionesSalida')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
