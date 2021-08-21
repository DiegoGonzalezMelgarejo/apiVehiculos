<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salidas extends Model
{
    protected $fillable = [ 'placa' ,
    'conductor' ,
    'FechayHoraSalida',
    'LecturaOdometroSalida',
    'NivelCombustibleSalida' ,
    'VigilanteSalida' ,
    'ObservacionesSalida' 
    
    
];

protected $dates = [
    'FechayHoraSalida'
];
}
