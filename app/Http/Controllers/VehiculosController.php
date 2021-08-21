<?php

namespace App\Http\Controllers;

use App\Vehiculo;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Vehiculo::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $validator = Validator::make($request->all(), [
         
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
        }
  
        $vehiculo = Vehiculo::create([
            'placa' => $request->get('placa'),
            'kilometraje' => $request->get('kilometraje'),
            'fecha' => $request->get('fecha'),
            'Conductor'=>$request->get('Conductor'),
            'licencia' => $request->get('licencia'),
            'observacionesLicencia' => $request->get('observacionesLicencia'),
            'SOAT' => $request->get('SOAT'),
            'observacionesSOAT' => $request->get('observacionesSOAT'),
            'tecnicoMecanica' => $request->get('tecnicoMecanica'),
            'observacionesTecnicoMecanica' => $request->get('observacionesTecnicoMecanica'),
            'seguroDanios' =>$request->get('seguroDanios'),
            'observacionesSeguroDanios' => $request->get('observacionesSeguroDanios'),
            'direccionalDelantera' => $request->get('direccionalDelantera'),
            'observacionesDireccionalDelantera' => $request->get('observacionesDireccionalDelantera'),
            'direccionaltrasera' => $request->get('direccionaltrasera'),
            'observacionesDireccionalTrasera' => $request->get('observacionesDireccionalTrasera'),
            'lucesAltas' => $request->get('lucesAltas'),
            'observacionesLucesAltas' => $request->get('observacionesLucesAltas'),
            'lucesBajas' => $request->get('lucesBajas'),
            'observacionesLucesBajas' => $request->get('observacionesLucesBajas'),
            'lucesStop' => $request->get('lucesStop'),
            'observacionesLucesStop' => $request->get('observacionesLucesStop'),
            'lucesReversa' => $request->get('lucesReversa'),
            'observacionesLucesReversa' => $request->get('observacionesLucesReversa'),
            'lucesParqueo' => $request->get('lucesParqueo'),
            'observacionesLucesParqueo' => $request->get('observacionesLucesParqueo'),
            'parabrisas' => $request->get('parabrisas'),
            'observacionesParabrisas' => $request->get('observacionesParabrisas'),
            'frenosPrincipal' =>$request->get('frenosPrincipal'),
            'observacionesFrenosPrincipal' =>$request->get('observacionesFrenosPrincipal'),
            'frenosEmergencia' =>$request->get('frenosEmergencia'),
            'observacionesFrenosEmergencia' =>$request->get('observacionesFrenosEmergencia'),
            'llantasDelateras' => $request->get('llantasDelateras'),
            'observacionesLlantasDelanteras' => $request->get('observacionesLlantasDelanteras'),
            'llantasTraseras' => $request->get('llantasTraseras'),
            'observacionesLlantasTraseras' => $request->get('observacionesLlantasTraseras'),
            'llantasRepuesto' => $request->get('llantasRepuesto'),
            'observacionesLlantasRepuesto' => $request->get('observacionesLlantasRepuesto'),
            'espejosLaterales' => $request->get('espejosLaterales'),
            'observacionesEspejosLaterales' => $request->get('observacionesEspejosLaterales'),
            'EspejoRetrovisor' => $request->get('EspejoRetrovisor'),
            'observacionesEspejoRetrovisor'=>$request->get('observacionesEspejoRetrovisor'),
            'RespuestaPito' => $request->get('RespuestaPito'),
            'observacionesRespuestaPito' => $request->get('observacionesRespuestaPito'),
            'frenos' => $request->get('frenos'),
            'observacionesFrenos' => $request->get('observacionesFrenos'),
            'aceite' => $request->get('aceite'),
            'observacionesAceite' => $request->get('observacionesAceite'),
            'refiregante' => $request->get('refiregante'),
            'observacionesRefigerante' => $request->get('observacionesRefigerante'),
            'apoyoDelantero' => $request->get('apoyoDelantero'),
            'observacionesApoyoDelantero' => $request->get('observacionesApoyoDelantero'),
            'apoyoTrasero' => $request->get('apoyoTrasero'),
            'observacionesApoyoTrasero' => $request->get('observacionesApoyoTrasero'),
            'cinturonesDelanteros' => $request->get('cinturonesDelanteros'),
            'observacionesCinturonesDelantero' => $request->get('observacionesCinturonesDelantero'),
            'cinturonesTraseros' => $request->get('cinturonesTraseros'),
            'observacionesCinturonesTraseros' => $request->get('observacionesCinturonesTraseros'),
            'cambioAceite' => $request->get('cambioAceite'),
            'observacionesCambioAceite' => $request->get('observacionesCambioAceite'),
            'sincronizacion' => $request->get('sincronizacion'),
            'observacionesSincronizacion' => $request->get('observacionesSincronizacion'),
            'alineacionBalanceo' => $request->get('alineacionBalanceo'),
            'observacionesAlineacionBalanceo' => $request->get('observacionesAlineacionBalanceo'),
            'cambiosLlantas' => $request->get('cambiosLlantas'),
            'observacionesCambioLlantas' => $request->get('observacionesCambioLlantas'),
            'tecnomecanicaVencimiento' => $request->get('tecnomecanicaVencimiento'),
            'observacionesTecnomecanicaVencimiento' => $request->get('observacionesTecnomecanicaVencimiento'),
            'soatVencimiento' => $request->get('soatVencimiento'),
            'observacionesSoatVencimiento' => $request->get('observacionesSoatVencimiento'),
            'observacionesElementos' => $request->get('observacionesElementos'),
            'fechaVencimientoExtintor' => $request->get('fechaVencimientoExtintor'),
            'capacidadExtintor' => $request->get('capacidadExtintor'),
            'observacionesExtintor' => $request->get('observacionesExtintor'),
            'extintor'=>$request->get('extintor'),
            'herramientas' => $request->get('herramientas'),
            'cruzeta' => $request->get('cruzeta'),
            'observacionesHerramientasCruceta' => $request->get('observacionesHerramientasCruceta'),
            'gato' => $request->get('gato'),
            'tacos' => $request->get('tacos'),
            'observacionesGatoTacos' => $request->get('observacionesGatoTacos'),
            'senales' => $request->get('senales'),
            'chaleco' => $request->get('chaleco'),
            'observacionesSenalesChaleco' => $request->get('observacionesSenalesChaleco'),
            'botiquin' => $request->get('botiquin'),
            'observacionesBotiquin' => $request->get('observacionesBotiquin'),
            'observacionesGenerales' => $request->get('observacionesGenerales'),
            'NombreCompleto'=> $request->get('NombreCompleto'),
            'Cedula'=> $request->get('Cedula'),
            'Objetivo'=> $request->get('Objetivo'),
            'Destino'=> $request->get('Destino'),
            'FechaDelServicio'=> $request->get('FechaDelServicio'),
            'NombreJefe'=> $request->get('NombreJefe')
            

        ]);


        return response()->json(compact('vehiculo'),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $vehiculo=Vehiculo::findOrFail($id);
        
        return response()->json(compact('vehiculo'),201) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Vehiculo::destroy($id);
    }
/**
     * Find by Placa
     *
     * @param  string $placa
     * @return \Illuminate\Http\Response
     */
    public function findByPlaca($placa){

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  dateTime $fecha
     * @return \Illuminate\Http\Response
     */
    public function findByFecha($fecha){

    }
}
