<?php

namespace App\Http\Controllers;

use App\Gastos;
use App\Anio;
use App\User;
use App\Mes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GastosController;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request, $idmes=0, $ani=0, $idedit=null){

        $id = Auth::id();
        $anios=Anio::all();
        $mes=Mes::orderBy('id','asc')
        ->get();
        $idanio=$this->idAnio($ani);
        $gastos=$this->mostrarAgenda($idmes, $idanio, $id);
        $mesnombre=$this->mesNombre($idmes);
        $preciototal=0;
        $meses=Mes::orderBy('id','asc')
        ->get();
        $gast = Gastos::find($idedit);
        if($gastos!=null){

            foreach($gastos as $gas){
                $preciototal=$preciototal+$gas->precio;
            }

        }
        

        return view('home', compact('mes', 'anios', 'gastos','mesnombre', 'idmes', 'ani','preciototal', 'idanio', 'idedit', 'meses', 'gast'));

    }
    public function mostrarAgenda($idmes=0, $idanio=0, $idusuario){
        
        $gastos=null;
        if($idmes!=0 && $idanio==0){

            $gastos=Gastos::where('id_mes', $idmes)
            ->where('id_user', $idusuario)
            ->orderBy('dia','desc')
            ->get();

        } elseif($idmes==0 && $idanio!=0){

            $gastos=Gastos::where('id_anio', $idanio)
            ->where('id_user', $idusuario)
            ->orderBy('dia','desc')
            ->get();

        } elseif($idmes!=0 && $idanio!=0){

            $gastos=Gastos::where('id_mes', $idmes)
            ->where('id_anio', $idanio)
            ->where('id_user', $idusuario)
            ->orderBy('dia','desc')
            ->get();

        }
        return $gastos;

    }
    public function mesNombre($idmes=0){

        if($idmes!=0){

        $me=Mes::find($idmes);
        $mes=$me['mes'];

        }else{

            $mes=' ';

        }

        return $mes;

    }
    public function idAnio($anio=0){

        $id=Anio::select('id')
        ->where('anios', $anio)->first();

        return $id['id'];

    }
}
