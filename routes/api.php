<?php

use App\Http\Controllers\AuthController;

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
Route::get('users', 'AuthController@index');
//Route::get('vehiculos', 'VehiculosController@index');
//Route::get('vehiculo/id', 'VehiculosController@show');
Route::resource('vehiculos', VehiculosController::class);
    //Rutas protegidas

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::post('user','AuthController@getAuthenticatedUser');
    //Route::post('vehiculos/update','VehiculosController@update');
  //  Route::post('vehiculos/destroy','VehiculosController@destroy');

});
