<?php

namespace App\Http\Controllers;

use App\Gastos;
use App\Anio;
use App\Mes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;


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
    public function edit($id, $ani, $idmes)
    {
        $idedit=$id;
        return redirect(URL::to('./' . $idmes . '/' . $ani . '/' . $idedit));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idedit)
    {
        $id = Auth::id();
        $gast = Gastos::find($idedit);
        $gast->precio = $request->precio;
        $gast->id_mes = $request->id_mes;
        $gast->descripcion = $request->descripcion;
        $gast->id_anio = $request->id_anio;
        $gast->dia = $request->dia;
        $gast->id_user = $id;
        $gast->save();

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
