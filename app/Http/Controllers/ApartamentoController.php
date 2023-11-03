<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Apartamento;
use App\Models\Duenio;
class ApartamentoController extends Controller
{
    //
    public function index(){
        $Apartamentos = Apartamento::all();
        return view('Apartamentos', compact('Apartamentos'));
    }

    public function consulta(){
        return view('consultaApartamento');
    }

    public function respuesta(Request $request){
        
        $Duenios = DB::table('duenios')->join('apartamentos', 'duenios.idDuenio', '=', 'apartamentos.idDuenio')->get();
        return view('consultaApartamentoResultado', compact('Duenios'));
    }
}
