<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\caracter;
use App\tipo;
use App\razas;
use App\pelajes;
use App\colores;
use App\complexion;

class MantenedoresController extends Controller
{
    public function index()
    {
        $caracter = caracter::where('activo', 'S')->get();
        $tipo = tipo::where('activo', 'S')->get();
        $razas = razas::where('activo', 'S')->get();
        $pelajes = pelajes::where('activo', 'S')->get();
        $colores = colores::where('activo', 'S')->get();
        $complexion = complexion::where('activo', 'S')->get();
        return ['caracter' => $caracter,
            'tipo' => $tipo,
            'razas' => $razas,
            'pelaje' => $pelajes,
            'colores' => $colores,
            'complexion' => $complexion
        ];
    }

    public function agregarCaracter(Request $request)
    {
        $caracter = caracter::firstOrCreate(['caracter' => $request->valor,'activo' => 'S']);
        if($caracter->wasRecentlyCreated){
            return Response::json(['mensaje' => 'Caracter creado correctamente'],200);
        }else{
            return Response::json(['mensaje' => 'El caracter ya se encuentra registrado'],400);
        };
    }

    public function agregarPelaje(Request $request)
    {
        $pelaje = pelajes::firstOrCreate(['pelaje' => $request->valor,'activo' => 'S']);
        if($pelaje->wasRecentlyCreated){
            return Response::json(['mensaje' => 'Pelaje creado correctamente'],200);
        }else{
            return Response::json(['mensaje' => 'El pelaje ya se encuentra registrado'],422);
        };

    }
}