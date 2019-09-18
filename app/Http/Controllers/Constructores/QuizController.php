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

        $IdQuiz = Quiz::where("id_usuario", Auth::user()->id)->where("id", $codigo)->orderBy("id", "DESC")->first();

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



        // $Request->merge(["id_usuario" => Auth::user()->id, "id_quiz" => self::GetQuizID()]);

        // Preguntas::insert($Request->all());

        // $UltimaPregunta = Preguntas::where("id_usuario", Auth::user()->id)->where("id_quiz", self::GetQuizID())->where("tipo", $Request->tipo)->orderBy("id", "DESC")->first();

        return "ExitoCrearPregunta('".Str::random(40)."')";

    }
}
