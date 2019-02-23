<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //

    public function register(Request $request)
    {
        /*usamos validator para validar si las variables en request son validas*/
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        /*mostramos errores en caso de fallar*/
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 400);
        }

        $request['password'] = Hash::make($request['password']);
        /*se crea el usuario*/
        $user = User::create($request->toArray());

        $response = 'creacion exitosa';

        return response($response, 200);

    }

    public function login(Request $request)
    {

        $array_datosLogin = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if (Auth::attempt($array_datosLogin)) {
            $http = new \GuzzleHttp\Client;
            $response = $http->post('http://gatos.test/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '13',
                    'client_secret' => 'eCXQOkizILCUHARn7c4DaFn8ImiKf4RVrzpVKUYI',
                    'username' => $request->email,
                    'password' => $request->password,
                    'scope' => '',
                ],
            ]);

            return json_decode((string) $response->getBody(), true);
        }
        else {
            $response = 'El usuario no existe';
            return response($response, 422);
        }

    }

    public function usuario(Request $request){
        $array_datosLogin = array(
            'email' => $request->email,
            'password' => $request->password
        );
        if(Auth::attempt($array_datosLogin)){
            $user = Auth::user();
            return response($user->name,200);
        }

    }
    public function logout(Request $request)
    {

        $token = $request->user()->token();
        $token->revoke();

        $response = 'You have been succesfully logged out!';
        return response($response, 200);

    }
}
