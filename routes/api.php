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



    // rutas publicas

Route::post('/usuario', 'Api\AuthController@usuario')->name('usuario.api');

    // rutas privadas
    Route::middleware('auth:api')->group(function () {
        Route::get('/listado','GatosController@index');
        Route::get('/listadoMantenedores','MantenedoresController@index');
        Route::post('/agregarCaracter','MantenedoresController@agregarCaracter');
        Route::get('/solicitarSeleccionado','MantenedoresController@solicitarSeleccionado');
        Route::put('/actualizarSeleccionado','MantenedoresController@actualizarSeleccionado');
        Route::post('/agregarPelaje','MantenedoresController@agregarPelaje');
        Route::post('/agregarColor','MantenedoresController@agregarColor');
        Route::post('/agregarRaza','MantenedoresController@agregarRaza');
        Route::post('/agregarComplexion','MantenedoresController@agregarComplexion');
        Route::post('/agregarTipo','MantenedoresController@agregarTipo');
        Route::put('/activarSeleccionado','MantenedoresController@activarSeleccionado');
        Route::put('/desactivarSeleccionado','MantenedoresController@desactivarSeleccionado');
        Route::put('/activar','GatosController@activar');
        Route::put('/desactivar','GatosController@desactivar');
    });






