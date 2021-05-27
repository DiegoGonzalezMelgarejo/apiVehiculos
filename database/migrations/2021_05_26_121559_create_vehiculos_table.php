<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('placa')->nullable(false);
            $table->string('kilometraje')->nullable(false);
            $table->dateTime('fecha')->nullable(false);
            #Documentos
            $table->tinyInteger('licencia')->nullable()->default(0);
            $table->longText('observacionesLicencia')->nullable();
            $table->tinyInteger('SOAT')->nullable()->default(0);
            $table->longText('observacionesSOAT')->nullable();
            $table->tinyInteger('tecnicoMecanica')->nullable()->default(0);
            $table->longText('observacionesTecnicoMecanica')->nullable();
            $table->tinyInteger('seguroDanios')->nullable()->default(0);
            $table->longText('observacionesSeguroDanios')->nullable();
            #Direccionales
            $table->tinyInteger('direccionalDelantera')->nullable()->default(0);
            $table->longText('observacionesDireccionalDelantera')->nullable();
            $table->tinyInteger('direccionaltrasera')->nullable()->default(0);
            $table->longText('observacionesDireccionalTrasera')->nullable();
            #Luces
            $table->tinyInteger('lucesAltas')->nullable()->default(0);
            $table->longText('observacionesLucesAltas')->nullable();
            $table->tinyInteger('lucesBajas')->nullable()->default(0);
            $table->longText('observacionesLucesBajas')->nullable();
            $table->tinyInteger('lucesStop')->nullable()->default(0);
            $table->longText('observacionesLucesStop')->nullable();
            
            $table->tinyInteger('lucesReversa')->nullable()->default(0);
            $table->longText('observacionesLucesReversa')->nullable();
            $table->tinyInteger('lucesParqueo')->nullable()->default(0);
            $table->longText('observacionesLucesParqueo')->nullable();
            #parabrisa
            $table->tinyInteger('parabrisas')->nullable()->default(0);
            $table->longText('observacionesParabrisas')->nullable();
            #llantas
            $table->tinyInteger('llantasDelateras')->nullable()->default(0);
            $table->longText('observacionesLlantasDelanteras')->nullable();
            $table->tinyInteger('llantasTraseras')->nullable()->default(0);
            $table->longText('observacionesLlantasTraseras')->nullable();
            $table->tinyInteger('llantasRepuesto')->nullable()->default(0);
            $table->longText('observacionesLlantasRepuesto')->nullable();

            #espejos
            $table->tinyInteger('espejosLaterales')->nullable()->default(0);
            $table->longText('observacionesEspejosLaterales')->nullable();
            $table->tinyInteger('EspejoRetrovisor')->nullable()->default(0);
            $table->longText('observacionesEspejoRetrovisor')->nullable();
            #pito

            $table->tinyInteger('RespuestaPito')->nullable()->default(0);
            $table->longText('observacionesRespuestaPito')->nullable();

            #Niveles Fluidos
            $table->tinyInteger('frenos')->nullable()->default(0);
            $table->longText('observacionesFrenos')->nullable();
            $table->tinyInteger('aceite')->nullable()->default(0);
            $table->longText('observacionesAceite')->nullable();
            $table->tinyInteger('refiregante')->nullable()->default(0);
            $table->longText('observacionesRefigerante')->nullable();

            #apoyoCabezas
            $table->tinyInteger('apoyoDelantero')->nullable()->default(0);
            $table->longText('observacionesApoyoDelantero')->nullable();
            $table->tinyInteger('apoyoTrasero')->nullable()->default(0);
            $table->longText('observacionesApoyoTrasero')->nullable();

            #cinturones
            $table->tinyInteger('cinturonesDelanteros')->nullable()->default(0);
            $table->longText('observacionesCinturonesDelantero')->nullable();
            $table->tinyInteger('cinturonesTraseros')->nullable()->default(0);
            $table->longText('observacionesCinturonesTraseros')->nullable();

            #Ultima fecha de Mantenimiento
            $table->tinyInteger('cambioAceite')->nullable()->default(0);
            $table->longText('observacionesCambioAceite')->nullable();
            $table->tinyInteger('sincronizacion')->nullable()->default(0);
            $table->longText('observacionesSincronizacion')->nullable();
            $table->tinyInteger('alineacionBalanceo')->nullable()->default(0);
            $table->longText('observacionesAlineacionBalanceo')->nullable();
            $table->tinyInteger('cambiosLlantas')->nullable()->default(0);
            $table->longText('observacionesCambioLlantas')->nullable();

            #fecha Vencimientos
            $table->tinyInteger('tecnomecanicaVencimiento')->nullable()->default(0);
            $table->longText('observacionesTecnomecanicaVencimiento')->nullable();
            $table->tinyInteger('soatVencimiento')->nullable()->default(0);
            $table->longText('observacionesSoatVencimiento')->nullable();
            #Observaciones Generales
            $table->longText('observacionesElementos')->nullable();

            #Equipo de seguridad

            #extintor
            $table->tinyInteger('fechaVencimientoExtintor')->nullable()->default(0);
            $table->string("capacidadExtintor",40)->nullable()->nullable();
            $table->longText('observacionesExtintor')->nullable();

            #Herramientas
            $table->tinyInteger('herramientas')->nullable()->default(0);


            #Cruceta
            $table->tinyInteger('cruzeta')->nullable()->default(0);

            $table->longText('observacionesHerramientasCruceta')->nullable();

            #Gato
            $table->tinyInteger('gato')->nullable()->default(0);
            $table->tinyInteger('tacos')->nullable()->default(0);
            $table->longText('observacionesGatoTacos')->nullable();

            #Señales
            $table->tinyInteger('senales')->nullable()->default(0);
            $table->tinyInteger('chaleco')->nullable()->default(0);
            $table->longText('observacionesSenalesChaleco')->nullable();


            #botiquin
            $table->tinyInteger('botiquin')->nullable()->default(0);

            $table->longText('observacionesBotiquin')->nullable();
            $table->longText('observacionesGenerales')->nullable();










            





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
