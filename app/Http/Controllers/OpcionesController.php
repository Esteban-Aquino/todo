<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\opciones;

class OpcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opciones = opciones::all();
        return $opciones;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $opcion = new opciones();
        $opcion->descripcion = $request->descripcion;
        $opcion->save();
        return $opcion;
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $opciones = opciones::findOrFail($request->id);
        $opciones->descripcion = $request->descripcion;
        $opciones->save();
        return $opciones;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $opcion = opciones::destroy($request->id);
        return $opcion;
    }
}
