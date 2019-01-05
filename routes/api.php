<?php

use Illuminate\Http\Request;
use App\Http\Controllers\GatosController;
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
Route::get('/listado','GatosController@index');
Route::get('/listadoMantenedores','MantenedoresController@index');
Route::put('/activar','GatosController@activar');
Route::put('/desactivar','GatosController@desactivar');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


