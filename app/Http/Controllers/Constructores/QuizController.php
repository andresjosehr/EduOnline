<?php

namespace App\Http\Controllers\Constructores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Str;
use Aut;
use Illuminate\Support\Facades\Input;


class QuizController extends Controller
{

	public function CrearQuiz(Request $Request)
	{
		return "ExitoCrearQuiz('".Str::random(10)."')";
	}
    public function CrearConsultarQuiz($codigo)
    {
    	$Datos["QuizID"]=Str::random(10);
    	$Datos["QuestionID"]=Str::random(10);

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
}
