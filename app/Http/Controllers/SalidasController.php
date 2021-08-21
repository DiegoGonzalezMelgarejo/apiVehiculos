<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Salidas;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Validator;
class SalidasController extends Controller
{
    //
    public function index()
    {
        //
        return Salidas::all();

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
  
        $salidas = Salidas::create([
            'placa' => $request->get('placa'),
            'conductor' => $request->get('conductor'),
            'FechayHoraSalida' => $request->get('FechayHoraSalida'),
            'LecturaOdometroSalida'=>$request->get('LecturaOdometroSalida'),
            'NivelCombustibleSalida' => $request->get('NivelCombustibleSalida'),
            'VigilanteSalida' => $request->get('VigilanteSalida'),
            'ObservacionesSalida' => $request->get('ObservacionesSalida')
    
            

        ]);


        return response()->json(compact('salidas'),201);
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
        $salida=Salidas::findOrFail($id);
        
        return response()->json(compact('salida'),201) ;
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Salidas::destroy($id);
    }

}
