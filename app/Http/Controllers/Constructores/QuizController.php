<?php

namespace App\Http\Controllers\Constructores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Quiz;
use App\Preguntas;

use Str;
use Auth;
use Illuminate\Support\Facades\Input;


class QuizController extends Controller
{

	public function CrearQuiz(Request $Request)
	{

        Quiz::insert(["id_usuario" => Auth::user()->id]);

        $IdQuiz = Quiz::where("id_usuario", Auth::user()->id)->orderBy("id", "DESC")->first();

            Preguntas::insert(["id_usuario" => Auth::user()->id,
                               "id_quiz"    => $IdQuiz->id,
                               "tipo"       => "1",
                               "orden"      => "1",
                               "segundos"   => "5",
                               "correcta_1" => "false",
                               "correcta_2" => "false",
                               "correcta_3" => "false",
                               "correcta_4" => "false"]);

		return "ExitoCrearQuiz('".$IdQuiz->id."')";
	}

    public function CrearConsultarQuiz($codigo)
    {

        $IdQuiz = Quiz::where("id_usuario", Auth::user()->id)->where("id", $codigo)->orderBy("id", "DESC")->with("Preguntas")->first();

    	$Datos["QuizID"]=$IdQuiz->id;
    	$Datos["QuestionID"]=$IdQuiz->Preguntas[0]->id;
        $Datos["Quiz"]=$IdQuiz;

    	return view("constructores.quiz.crear", ["Datos" => $Datos]);
    }

    public function SubirFotoQuiz(Request $request)
    {
        if (($request->hasFile('file'))) {


            $file = Input::file('file');
            $NombreArchivo=Str::random(40).".".$file->getClientOriginalExtension();

            $file->move(public_path().'/img/quiz_img/', $NombreArchivo);

            $request->merge(["img" => $NombreArchivo]);


            return "ExitoUploadImgQuiz('".json_encode($request->all())."')";
        }
    }


    public function SubirFotoQuizG(Request $request)
    {
        if (($request->hasFile('file'))) {

            $file = Input::file('file');
            $NombreArchivo=Str::random(40).".".$file->getClientOriginalExtension();

            $file->move(public_path().'/img/quiz_img/', $NombreArchivo);



            return "ExitoUploadImgQuizG('".$NombreArchivo."')";
        }
    }



    public function GetQuizID()
    {
        $id = explode("/", url()->previous());
        return $id[count($id)-1];
    }


    public function ConfigQuiz(Request $Request)
    {

        Quiz::where("id", self::GetQuizID())->update($Request->all());
    }

    public function GuardarPreguntas(Request $Request)
    {
        foreach ($Request->except("orden") as $key => $value) {
                Preguntas::where("id", $key)->update($value);
        }

        foreach ($Request->only("orden")["orden"] as $key => $value) {
            Preguntas::where("id", $key)->update(["orden" => $value]);
        }
    }

    public function CrearPregunta(Request $Request)
    {



        $Request->merge(["id_usuario" => Auth::user()->id, "id_quiz" => self::GetQuizID()]);

        Preguntas::insert($Request->all());

        $UltimaPregunta = Preguntas::where("id_usuario", Auth::user()->id)->where("id_quiz", self::GetQuizID())->where("tipo", $Request->tipo)->orderBy("id", "DESC")->first();

        return "ExitoCrearPregunta('".$UltimaPregunta->id."')";

    }


    public function Borrador(Request $Request)
    {
        Quiz::where("id", self::GetQuizID())->update($Request->all());
    }


    public function DuplicarPregunta(Request $Request)
    {
            $Datos = array(     "id_usuario"      => Auth::user()->id,
                                "id_quiz"         => self::GetQuizID(),
                                "orden"           => end($Request->only("orden")["orden"]),
                                "segundos"        => $Request->pregunta["segundos"],
                                "correcta_1"      => $Request->pregunta["correcta_1"],
                                "correcta_2"      => $Request->pregunta["correcta_2"],
                                "correcta_3"      => $Request->pregunta["correcta_3"],
                                "correcta_4"      => $Request->pregunta["correcta_4"],
                                "credito_media"   => $Request->pregunta["credito_media"],
                                "iframe_video_yt" => $Request->pregunta["iframe_video_yt"],
                                "img"             => $Request->pregunta["img"],
                                "link_video_yt"   => $Request->pregunta["link_video_yt"],
                                "pregunta"        => $Request->pregunta["pregunta"],
                                "respuesta_1"     => $Request->pregunta["respuesta_1"],
                                "respuesta_2"     => $Request->pregunta["respuesta_2"],
                                "respuesta_3"     => $Request->pregunta["respuesta_3"],
                                "respuesta_4"     => $Request->pregunta["respuesta_4"],
                                "tipo"            => $Request->pregunta["tipo_pregunta"],

                        );

            $id = Preguntas::insertGetId($Datos);

            $Orden=$Request->only("orden")["orden"];
            array_pop($Orden);

            foreach ($Orden as $key => $value) {
                Preguntas::where("id", $key)->update(["orden" => $value]);
            }

            return "ExitoDuplicar('".$Request->key."', '".$id."')";

    }

    public function EliminarPregunta(Request $Request)
    {
        Preguntas::where("id", $Request->id)->delete();
        return "console.log('".$Request->id."')";
    }
}
