<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gato;
class GatosController extends Controller
{
    //
    public function index(){
        $gatos=gato::with('caracter','colores','complexion','pelajes','razas','tipo')->get();
        return ['gatos' => $gatos];
    }
    /*nunca olvidar la instancia de request*/
    public function activar(Request $request){
        /*verificamos con findOrFail si existe la id*/
        $gato = gato::findOrFail($request->id);
        /*declaramos los campos a actualizar*/
        $gato->activo='S';
        /*finalmente guardamos con save*/
        $gato->save();
    }
    public function desactivar(Request $request){
        /*verificamos con findOrFail si existe la id*/
        $gato = gato::findorFail($request->id);
        /*declaramos los campos a actualizar*/
        $gato->activo= 'N';
        /*finalmente guardamos con save*/
        $gato->save();
    }
}
