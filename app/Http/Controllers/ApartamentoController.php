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
        $datoApp = Apartamento::find($request->input('id'));
        $Apartamento = Duenio::where("idDuenio","$datoApp->idDuenio")->get();
        // $Duenios = DB::table('duenios')->join('apartamentos', 'duenios.idDuenio', '=', 'apartamentos.idDuenio')->get();
        return view('consultaApartamentoResultado', compact('Apartamento', 'datoApp'));
    }
}
