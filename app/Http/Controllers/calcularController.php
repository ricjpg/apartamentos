<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcularController extends Controller
{
    //
    public function index(){
        return view('calcular');
    }

    public function calcular(Request $request){
        $Piso = $request->input('Piso');
        $mtSqrt = $request->input('mtSqrt');
        $Resultado = 0;
        switch ($Piso){
            case(1):
            $Resultado = $mtSqrt*1500;
            break;
            case(2):
            $Resultado = $mtSqrt*(1500*1.1);
            break;
            case(3):
            $Resultado = $mtSqrt*(1500*1.2);
            break;
            case(4):
            $Resultado = $mtSqrt*(1500*1.3);
            break;
            case(5):
            $Resultado = $mtSqrt*(1500*1.4);
            break;
            case(6):
            $Resultado = $mtSqrt*(1500*1.5);
            break;
            case(7):
            $Resultado = $mtSqrt*(1500*1.6);
            break;
            case(8):
            $Resultado = $mtSqrt*(1500*1.7);
            break;
            case(9):
            $Resultado = $mtSqrt*(1500*1.8);
            break;
            case(10):
            $Resultado = $mtSqrt*(1500*1.9);
            break;
            case(11):
            $Resultado = $mtSqrt*(1500*2.0);
            break;
            case(12):
            $Resultado = $mtSqrt*(1500*2.1);
            break;
            default:
            $Resultado = $mtSqrt*1500;
            break;
        }
        return view('resultado', compact('Resultado'));
    }

    
}
