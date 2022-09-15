<?php

namespace App\Http\Controllers;

use App\Gastos;
use App\Anio;
use App\Mes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {

        $id = Auth::id();
        $gastos = new Gastos();
        $gastos->precio = $request->precio;
        $gastos->id_mes = $request->id_mes;
        $gastos->descripcion = $request->descripcion;
        $gastos->id_anio = $request->id_anio;
        $gastos->dia = $request->dia;
        $gastos->id_user = $id;
        $gastos->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function show(Gastos $gastos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mes = Mes::all();
        $anios = Anio::all();
    	$gastos = Gastos::find($id);
        return back()->with('edit', compact('mes', 'anios', 'gastos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gastos $gastos)
    {
        $id = Auth::id();
        $gastos = new Gastos();
        $gastos->precio = $request->precio;
        $gastos->id_mes = $request->id_mes;
        $gastos->descripcion = $request->descripcion;
        $gastos->id_anio = $request->id_anio;
        $gastos->dia = $request->dia;
        $gastos->id_user = $id;
        $gastos->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Gastos::find($id);
        $delete->delete();
        return back();
    }
}
