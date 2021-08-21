<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Entradas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
        $table->string('placa');
        $table->string('conductor');
        $table->longText('FechayHoraEntrada')->nullable();
        $table->longText('LecturaOdometroEntrada')->nullable();
        $table->longText('NivelCombustibleEntrada')->nullable();
        $table->longText('VigilanteEntrada')->nullable();
        $table->longText('ObservacionesEntrada')->nullable();
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
