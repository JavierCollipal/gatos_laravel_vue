<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\caracter;
use App\tipo;
use App\razas;
use App\pelajes;
use App\colores;
use App\complexion;

class MantenedoresController extends Controller
{
    public function index(){
        $caracter=caracter::where('activo','S')->paginate(5);
        $tipo=tipo::where('activo','S')->paginate(5);
        $razas=razas::where('activo','S')->paginate(5);
        $pelajes=pelajes::where('activo','S')->paginate(5);
        $colores=colores::where('activo','S')->paginate(5);
        $complexion=complexion::where('activo','S')->paginate(5);
        return ['caracter' => $caracter,
            'tipo' => $tipo,
            'razas' => $razas,
            'pelaje' => $pelajes,
            'colores' => $colores,
            'complexion' => $complexion
            ];
    }
}
