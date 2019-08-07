<?php

namespace App\Http\Controllers\Constructores;

use Str;
use Auth;
use App\Clases;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class LeccionesController extends Controller
{

    public function CrearClase(Request $Request)
    {
        $Request->merge(["id_usuario" => Auth::user()->id]);
        Clases::create($Request->all());

        $Clase=Clases::orderBy("id", "DESC")->first();

        return "ClaseCreadaExistosamente('".$Clase->id."')";


    }

    public function CrearConsultarClase($id)
    {   
        $Data["Clase"]=Clases::where("id", $id)->first();

        return view("constructores.lecciones.crear", ["Data" => $Data]);
    }

    public function SubirFotoLeccion(Request $request)
    {
    	if (($request->hasFile('file'))) {


            $file = Input::file('file');
            $NombreArchivo=Str::random(40).".".$file->getClientOriginalExtension();

            $file->move(public_path().'/img/lecciones_img/', $NombreArchivo);


            return "ExitoUploadImgSubLesson('".$NombreArchivo."')";
        }
    }


    public function CrearLeccion(Request $Request)
    {

    	$Request->merge(["id" => Str::random(5)]);
    	return "LeccionCreadaExitosamente('".json_encode($Request->all())."')";
    }

    public function EliminarLeccion(Request $Request)
    {
        return $Request;
    }

    public function DuplicarLeccion(Request $Request)
    {
        return "DuplicacionExitosa('".Str::random(10)."')";
    }

    public function UpdateContenidoLecciones(Request $Request){
        
        return $Request;
    }


    public function SubirFotoClase(Request $request)
    {

        return url()->previous();
        
        if (($request->hasFile('file'))) {


            $file = Input::file('file');
            $NombreArchivo=Str::random(40).".".$file->getClientOriginalExtension();

            $file->move(public_path().'/img/lecciones_img/', $NombreArchivo);


            return "ExitoUploadImgSubClase('".$NombreArchivo."')";
        }
    }
}
