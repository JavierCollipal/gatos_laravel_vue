<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gato;
class GatosController extends Controller
{
    //
    public function index(){
        $gatos=gato::with('caracter','colores')->get();
        return ['gatos' => $gatos];
    }
}
