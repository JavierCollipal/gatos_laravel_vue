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
        $caracter = caracter::firstOrCreate(['caracter' => $request->valor, 'activo' => 'S']);
        if ($caracter->wasRecentlyCreated) {
            return Response::json(['mensaje' => 'Caracter creado correctamente'], 200);
        } else {
            return Response::json(['mensaje' => 'El caracter ya se encuentra registrado'], 400);
        };
    }

    public function agregarPelaje(Request $request)
    {
        $pelaje = pelajes::firstOrCreate(['pelaje' => $request->valor, 'activo' => 'S']);
        if ($pelaje->wasRecentlyCreated) {
            return Response::json(['mensaje' => 'Pelaje creado correctamente'], 200);
        } else {
            return Response::json(['mensaje' => 'El pelaje ya se encuentra registrado'], 400);
        };

    }

    public function agregarColor(Request $request)
    {
        $color = colores::firstOrCreate(['color' => $request->valor, 'activo' => 'S']);
        if ($color->wasRecentlyCreated) {
            return Response::json(['mensaje' => 'Color creado correctamente'], 200);
        } else {
            return Response::json(['mensaje' => 'El Color ya se encuentra registrado'], 400);
        };

    }

    public function agregarRaza(Request $request)
    {
        $color = razas::firstOrCreate(['raza' => $request->valor, 'activo' => 'S']);
        if ($color->wasRecentlyCreated) {
            return Response::json(['mensaje' => 'Raza creado correctamente'], 200);
        } else {
            return Response::json(['mensaje' => 'La Raza ya se encuentra registrado'], 400);
        };

    }

    public function agregarComplexion(Request $request)
    {
        $color = complexion::firstOrCreate(['complexion' => $request->valor, 'activo' => 'S']);
        if ($color->wasRecentlyCreated) {
            return Response::json(['mensaje' => 'Complexion creado correctamente'], 200);
        } else {
            return Response::json(['mensaje' => 'La Complexion ya se encuentra registrado'], 400);
        };

    }

    public function agregarTipo(Request $request)
    {
        $color = tipo::firstOrCreate(['tipo' => $request->valor, 'activo' => 'S']);
        if ($color->wasRecentlyCreated) {
            return Response::json(['mensaje' => 'Tipo creado correctamente'], 200);
        } else {
            return Response::json(['mensaje' => 'El Tipo ya se encuentra registrado'], 400);
        };

    }

    public function activarSeleccionado(Request $request)
    {

        switch ($request->categoria) {
            case 'caracter':
                $categoria = caracter::findorFail($request->id);
                break;
            case 'pelaje':
                $categoria = pelajes::findorFail($request->id);
                break;

            case 'tipo':
                $categoria = tipo::findorFail($request->id);
                break;

            case 'complexion':
                $categoria = complexion::findorFail($request->id);
                break;

            case 'color':
                $categoria = colores::findorFail($request->id);
                break;

            case 'raza':
                $categoria = razas::findorFail($request->id);
                break;


        }
        $categoria->activo = 'S';
        $categoria->save();
    }

    public function desactivarSeleccionado(Request $request)
    {
        switch ($request->categoria) {
            case 'caracter':
                $categoria = caracter::findorFail($request->id);
                break;
            case 'pelaje':
                $categoria = pelajes::findorFail($request->id);
                break;

            case 'tipo':
                $categoria = tipo::findorFail($request->id);
                break;

            case 'complexion':
                $categoria = complexion::findorFail($request->id);
                break;

            case 'color':
                $categoria = colores::findorFail($request->id);
                break;

            case 'raza':
                $categoria = razas::findorFail($request->id);
                break;


        }
        $categoria->activo = 'N';
        $categoria->save();

    }

}
