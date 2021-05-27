<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
   /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
    protected $fillable = [ 'placa' ,
    'kilometraje' ,
    'fecha',
    'licencia' ,
    'observacionesLicencia',
    'SOAT',
    'observacionesSOAT',
    'tecnicoMecanica' ,
    'observacionesTecnicoMecanica' ,
    'seguroDanios'  ,
    'direccionalDelantera',
    'observacionesDireccionalDelantera' ,
    'direccionaltrasera' ,
    'observacionesDireccionalTrasera' ,
    'lucesAltas' ,
    'observacionesLucesAltas' ,
    'lucesBajas' ,
    'observacionesLucesBajas' ,
    'lucesStop' ,
    'observacionesLucesStop',
    'lucesReversa'  ,
    'observacionesLucesReversa' ,
    'lucesParqueo' ,
    'observacionesLucesParqueo' ,
    'parabrisas' ,
    'observacionesParabrisas' ,
    'llantasDelateras' ,
    'observacionesLlantasDelanteras',
    'llantasTraseras' ,
    'observacionesLlantasTraseras' ,
    'llantasRepuesto' ,
    'observacionesLlantasRepuesto' ,
    'espejosLaterales' ,
    'observacionesEspejosLaterales' ,
    'EspejoRetrovisor',
    'RespuestaPito' ,
    'observacionesRespuestaPito' ,
    'frenos' ,
    'observacionesFrenos' ,
    'aceite' ,
    'observacionesAceite',
    'refiregante' ,
    'observacionesRefigerante',
    'apoyoDelantero' ,
    'observacionesApoyoDelantero' ,
    'apoyoTrasero' ,
    'observacionesApoyoTrasero',
    'cinturonesDelanteros' ,
    'observacionesCinturonesDelantero' ,
    'cinturonesTraseros' ,
    'observacionesCinturonesTraseros' ,
    'cambioAceite' ,
    'observacionesCambioAceite' ,
    'sincronizacion' ,
    'observacionesSincronizacion' ,
    'alineacionBalanceo' ,
    'observacionesAlineacionBalanceo' ,
    'cambiosLlantas' ,
    'observacionesCambioLlantas' ,
    'tecnomecanicaVencimiento' ,
    'observacionesTecnomecanicaVencimiento' ,
    'soatVencimiento'  ,
    'observacionesSoatVencimiento' ,
    'observacionesElementos' ,
    'fechaVencimientoExtintor' ,
    'capacidadExtintor'  ,
    'observacionesExtintor' ,
    'herramientas'  ,
    'cruzeta'  ,
    'observacionesHerramientasCruceta' ,
    'gato' ,
    'tacos'  ,
    'observacionesGatoTacos' ,
    'senales'  ,
    'chaleco'  ,
    'observacionesSenalesChaleco',
    'botiquin' ,
    'observacionesBotiquin',
    'observacionesGenerales' 
];

protected $dates = [
    'fecha'
];
}
