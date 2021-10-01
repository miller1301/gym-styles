<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

//Controlador de la tabla Horario
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Funcion para traer todos los datos
    public function index()
    {
        $horario = Horario::all();
        return $horario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Funciom para Crear un nuevo dato
    public function store(Request $request)
    {
        $horario = new Horario();
        $horario->nombre = $request->nombre;
        $horario->dia = $request->dia;
        $horario->hora_inicio = $request->hora_inicio;
        $horario->hora_fin = $request->hora_fin;

        $horario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Funcion para Actualizar un dato
    public function update(Request $request)
    {
        $horario = Horario::findOrFail($request);
        $horario = new Horario();
        $horario->nombre = $request->nombre;
        $horario->dia = $request->dia;
        $horario->hora_inicio = $request->hora_inicio;
        $horario->hora_fin = $request->hora_fin;

        $horario->save();
        return $horario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Funcion para eliminar un nuevo dato
    public function destroy(Request $request)
    {
        $horario = Horario::destroy($request->id);
        return $horario;
    }
}
