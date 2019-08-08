<?php

namespace App\Http\Controllers\Constructores;

use Str;
use Auth;
use App\Clases;
use App\Lecciones;
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
        $Data["Clase"]=Clases::where("id", $id)->with("Lecciones")->first();

        if (!$Data["Clase"]) return redirect("escritorio");
        if ($Data["Clase"]->id_usuario!=Auth::user()->id) return redirect("escritorio");

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

        if ($Request->img_leccion==null) $Request->merge(["img_leccion" => "Edu.png"]);


        Lecciones::insert([
            "Nombre" => $Request->nombre,
            "estado" => $Request->estado_leccion,
            "img"    => $Request->img_leccion,
            "contenido" =>'{"time":651765161,"blocks":[],"version":652258651}',
            "fecha_apertura" => $Request->apertura_programada,
            "id_clase" => self::GetClaseID(),
            "orden" => count(Lecciones::where("id_clase", self::GetClaseID())->get())+1,
        ]);

    	$Request->merge(["id" => Lecciones::orderBy("id", "DESC")->first()->id]);
    	return "LeccionCreadaExitosamente('".json_encode($Request->all())."')";
    }

    public function EliminarLeccion(Request $Request)
    {


        Lecciones::where("id", $Request->LeccionEliminar)->delete();

        foreach ($Request->except("LeccionEliminar") as $key => $value) {
            if ($key!="nueva_copia") {
                Lecciones::where("id", $key)->update(["orden" => $value]);
            }
        }
    }

    public function DuplicarLeccion(Request $Request)
    {

        if ($Request->img_leccion==null) $Request->merge(["img_leccion" => "Edu.png"]);

        Lecciones::insert([
            "Nombre" => $Request->nombre,
            "estado" => $Request->estado_leccion,
            "img"    => $Request->img_leccion,
            "contenido" =>$Request->contenido,
            "fecha_apertura" => $Request->apertura_programada,
            "id_clase" => self::GetClaseID(),
            "orden" => $Request->Posiciones["nueva_copia"],
        ]);

        foreach ($Request->Posiciones as $key => $value) {
            if ($key!="nueva_copia") {
                Lecciones::where("id", $key)->update(["orden" => $value]);
            }
        }

        return "DuplicacionExitosa('".Lecciones::orderBy("id", "DESC")->first()->id."')";
    }

    public function UpdateContenidoLecciones(Request $Request){

        Lecciones::where('id', $Request->LeccionSeleccionada)->update(["contenido" => json_encode($Request->Contenidos[$Request->LeccionSeleccionada])]);
    }

    public function UpdateLeccion(Request $Request)
    {
        Lecciones::where("id", $Request->id)->update([
            "Nombre" => $Request->nombre,
            "estado" => $Request->estado_leccion,
            "img"    => $Request->img_leccion,
            "fecha_apertura" => $Request->apertura_programada,
        ]);
    }


    public function SubirFotoClase(Request $request)
    {

        $id = explode("/", url()->previous());
        $id=$id[count($id)-1];
        
        if (($request->hasFile('file'))) {


            $file = Input::file('file');
            $NombreArchivo=Str::random(40).".".$file->getClientOriginalExtension();

            $file->move(public_path().'/img/lecciones_img/', $NombreArchivo);

            Clases::where("id", self::GetClaseID())->update(["img" => $NombreArchivo]);


            return "ExitoUploadImgSubClase('".$NombreArchivo."')";
        }
    }


    public function GetClaseID()
    {
        $id = explode("/", url()->previous());
        return $id[count($id)-1];
    }

    public function EliminarClase()
    {


        Clases::where("id", self::GetClaseID())->delete();
        Lecciones::where("id_clase", self::GetClaseID())->delete();

        return "LeccionEliminadaExitosamente()";
    }

    public function OrdenarLecciones(Request $Request)
    {
        foreach ($Request->Posiciones as $key => $value) {
            if ($key!="nueva_copia") {
                Lecciones::where("id", $key)->update(["orden" => $value]);
            }
        }
        return "Exito";
    }

    public function EliminarClaseRecursos(Request $Request)
    {
        if (Clases::where("id", $Request->id)->first()->id_usuario==Auth::user()->id) {
            Clases::where("id", $Request->id)->delete();
            Lecciones::where("id_clase", $Request->id)->delete();
            return "Exito";
        }
    }
}
