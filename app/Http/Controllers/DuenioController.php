<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duenio;
use App\Models\Apartamento;

class DuenioController extends Controller
{
    //
    public function index(){
        $Duenios = Duenio::all();
        return view('Duenios', compact('Duenios'));
    }

    public function crear(){
        return view('crearDuenio');
    }

    public function guardar(Request $request){
        $nuevoDuenio = New Duenio();
        $nuevoDuenio->nombre = $request->input('Nombre');
        $nuevoDuenio->apellido = $request->input('Apellido');
        $nuevoDuenio->correo = $request->input('Correo');

        $nuevoDuenio->save();
        return redirect()->route('duenios.index');
    }

    public function consulta(){
        return view('consultaDuenio');
    }

    public function respuesta(Request $request){
        
        $Apartamentos = Apartamento::where('idDuenio', $request->input('idDuenio'))->get();
        return view('consultaDuenioResultado', compact('Apartamentos'));
    }
}
