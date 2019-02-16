<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //

    public function register (Request $request) {
       /*usamos validator para validar si las variables en request son validas*/
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
       /*mostramos errores en caso de fallar*/
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()], 400);
        }

        $request['password']=Hash::make($request['password']);
        /*se crea el usuario*/
        $user = User::create($request->toArray());
        /*se genera un token para este*/
        $token = $user->createToken('Token de registro')->accessToken;
        $response = ['token' => $token];
        /*se devuelve el token como response*/
        return response($response, 200);

    }

    public function login (Request $request) {
        /*se  buscca generar el objeto user mediante un match con el correo del request*/
        $user = User::where('email', $request->email)->first();
        /*si existe, se valida la contraseña*/
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                /*mismo procedimiento de registro con el token*/
                $token = $user->createToken('Token de login')->accessToken;
                $response = ['token' => $token];
                return response($response, 200);
            } else {
                $response = "Contraseña equivocada";
                return response($response, 422);
            }

        }
        /*en caso contrario, el usuario no existe registrado y devuelve la respuesta*/
        else {
                $response = 'El usuario no existe';
            return response($response, 422);
        }

    }

    public function logout (Request $request) {

        $token = $request->user()->token();
        $token->revoke();

        $response = 'You have been succesfully logged out!';
        return response($response, 200);

    }
}
