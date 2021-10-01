<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
//Controlador de la tabla profesors
class ProfesorController extends Controller
{
    //Funcion para traer todos los datos
    public function index(){
    $Profesores = Profesor::all();
    return $Profesores;
    }
    // Funcion para Crear un nuevo dato
    public function store(Request $request){
    
    $Profesores = new Profesor();
    $Profesores->Nombre = $request->Nombre;
    $Profesores->Asignacion = $request->Asignacion;
    $Profesores->Horario = $request->Horario;

    $Profesores->save();
    }
    //Funcion para Actualizar un nuevo dato
    public function update(Request $request){

    $Profesores = Profesor::findOrFail($request->id);
    $Profesores->Nombre = $request->Nombre;
    $Profesores->Asignacion = $request->Asignacion;
    $Profesores->Horario = $request->Horario;

    $Profesores->save();
    return $Profesores;
    }
    //Funcion para eliminar un dato
    public function destroy(Request $request){
        $Profesores = Profesor::destroy($request->id);
        return $Profesores;
    }
}

