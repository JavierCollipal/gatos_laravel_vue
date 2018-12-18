<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gato;
class GatosController extends Controller
{
    //
    public function index(){
        $gatos=gato::all();
        return ['gatos' => $gatos];
    }
}
