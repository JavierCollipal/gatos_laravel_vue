<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/login', 'Api\AuthController@login')->name('login.api');
Route::post('/register', 'Api\AuthController@register')->name('register.api');

Route::any('{all}', function(){
    return view('inicio');
})->where(['all' => '.*']);




