<?php

namespace App\Http\Controllers;

use App\Entradas;
use Illuminate\Http\Request;
use DateTime;

use Illuminate\Support\Facades\Validator;
class EntradaController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Entradas::all();

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
  
        $entradas = Entradas::create([
            'placa' => $request->get('placa'),
            'conductor' => $request->get('conductor'),
            'FechayHoraEntrada' => $request->get('FechayHoraEntrada'),
            'LecturaOdometroEntrada'=>$request->get('LecturaOdometroEntrada'),
            'NivelCombustibleEntrada' => $request->get('NivelCombustibleEntrada'),
            'VigilanteEntrada' => $request->get('VigilanteEntrada'),
            'ObservacionesEntrada' => $request->get('ObservacionesEntrada')
    
            

        ]);


        return response()->json(compact('entradas'),201);
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
        $entrada=Entradas::findOrFail($id);
        
        return response()->json(compact('entrada'),201) ;
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Entradas::destroy($id);
    }
}
