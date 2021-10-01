<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Horario
Route::get('/horario', 'App\Http\Controllers\HorarioController@index'); // mostrar todos los registros
Route::post('/horario/create', 'App\Http\Controllers\HorarioController@store'); // Crear un registro
Route::put('/horario/{id}/update', 'App\Http\Controllers\HorarioController@update'); // Actualizar un registro
Route::get('/horario/{id}', 'App\Http\Controllers\HorarioController@destroy'); // Borrar un registro 

//Registro
Route::get('/usuarios', 'App\Http\Controllers\UserRegisterController@index'); // Mostrar todos los registros
Route::post('/usuarios', 'App\Http\Controllers\UserRegisterController@store'); // Crear un registro
Route::put('/usuarios/{id}', 'App\Http\Controllers\UserRegisterController@update'); // Actualizar un registro
Route::delete('/usuarios/{id}', 'App\Http\Controllers\UserRegisterController@destroy'); // Elimina un registro

//Administrador
Route::get('profesor', 'App\Http\Controllers\ProfesorController@index'); //mostrar todos los registros
Route::post('/profesor', 'App\Http\Controllers\ProfesorController@store'); //crear un registro
Route::put('/profesor/{id}', 'App\Http\Controllers\ProfesorController@update'); //actualizar un registro
Route::delete('/profesor/{id}', 'App\Http\Controllers\ProfesorController@destroy'); //actualizar un registro

//Apartar Clases

Route::get('/apartar', 'App\Http\Controllers\ClasesController@index');//Mostrar registro
Route::post('/apartar/create', 'App\Http\Controllers\ClasesController@store');//Crear registro
Route::put('/apartar/{id}/update', 'App\Http\Controllers\ClasesController@update');//Actualizar registro
Route::delete('/apartar/{id}', 'App\Http\Controllers\ClasesController@destroy');//Borrar registro