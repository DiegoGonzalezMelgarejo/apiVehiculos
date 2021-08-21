<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\SalidasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@authenticate');
//Route::post('vehiculos','VehiculosController@store');

    //Rutas a las que se permitirá acceso
//Route::get('vehiculos', 'VehiculosController@index');
//Route::get('vehiculo/id', 'VehiculosController@show');
    //Rutas protegidas
    Route::group(['middleware' => ['cors']], function() {

Route::get('users', 'AuthController@index');
    
        //Route::post('vehiculos/update','VehiculosController@update');
      //  Route::post('vehiculos/destroy','VehiculosController@destroy');
    
    });
Route::resource('vehiculos2', VehiculosController::class);

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::post('user','AuthController@getAuthenticatedUser');
    //Route::post('vehiculos/update','VehiculosController@update');
  //  Route::post('vehiculos/destroy','VehiculosController@destroy');
  Route::resource('vehiculos', VehiculosController::class);
  Route::resource('entradas', EntradaController::class);
  Route::resource('salidas', SalidasController::class);

});
