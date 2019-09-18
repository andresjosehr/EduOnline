<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases;
use App\Quiz;
use Auth;

class RecursosController extends Controller
{
    public function Index()
    {
    	$Data["Clases"]= Clases::where("id_usuario", Auth::user()->id)->get();

    	$Data["Quiz"]= Quiz::where("id_usuario", Auth::user()->id)->with("Preguntas")->get();

    	return view("consulta_recursos.index", ["Data" => $Data]);
    	
    }
}
