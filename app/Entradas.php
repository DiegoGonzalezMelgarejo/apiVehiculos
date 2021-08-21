<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    protected $fillable = [ 'placa' ,
    'conductor' ,
    'FechayHoraEntrada',
    'LecturaOdometroEntrada',
    'NivelCombustibleEntrada' ,
    'VigilanteEntrada' ,
    'ObservacionesEntrada' 
    
    
];

protected $dates = [
    'FechayHoraEntrada'
];
}
