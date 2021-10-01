<?php

namespace App\Http\Controllers;

use App\Models\clases;
use Illuminate\Http\Request;
//Controlador de la tabla clases
class ClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // Funcion para traer todos los datos 
    public function index()
    {
        $clases = clases::all();
        return $clases;
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
    //Funcion para crear un nuevo dato
    public function store(Request $request)
    {
        $clases = new clases();
        $clases->nombre = $request->nombre;
        $clases->ID_Clase =$request-> ID_Clase;

        $clases->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function show(clases $clases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function edit(clases $clases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    //Funcion para Actualizar un dato
    public function update(Request $request)
    {
        $clases = clases::findOrFail($request);
        $clases = new clases();
        $clases->nombre = $request->nombre;
        $clases->ID_Clases = $request->ID_Clases;

        $clases->save();
        return $clases;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    //Funcion para eliminar un dato
    public function destroy(Request $request)
    {
        $clases = clases::destroy($request->id);
        return $clases;
    }
}
