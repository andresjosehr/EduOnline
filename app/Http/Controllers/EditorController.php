<?php

namespace App\Http\Controllers;

use Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EditorController extends Controller
{
    public function EmbebedLink()
    {
    	  file_get_contents("https://getmeta.info/json?url=http%3A%2F%2Ffacebook.com");
          // $Page = json_decode(file_get_contents("https://getmeta.info/json?url=http%3A%2F%2Ffacebook.com"));
          $Page = json_decode(file_get_contents("https://getmeta.info/json?url=".$_GET["url"]));


          $result["success"]=1;
          $result["meta"]["title"]=$Page->title;
          $result["meta"]["description"]=$Page->description;

          if (isset($Page->og->image)) {
              $result["meta"]["image"]["url"]=$Page->og->image;
          } else{

            $MaxImg[1]=0;
          foreach ($Page->icons as $Icon) {
              if (isset($Icon->sizes)) {
                    
                  if ($MaxImg[1]<$Icon->sizes[0]->width) {
                      $MaxImg[0]=$Icon->href;
                  }
              }
          }
          $result["meta"]["image"]["url"]=$MaxImg[0];

          }

          return $result;
    }

    public function UploadImg(Request $request)
    {
    	if (($request->hasFile('image'))) {


            $file = Input::file('image');
            $NombreArchivo=Str::random(40).".".$file->getClientOriginalExtension();

            $file->move(public_path().'/img/lecciones_img/', $NombreArchivo);


            return array("success" => 1,
						    "file" =>array(
						        "url" => '../img/lecciones_img/'.$NombreArchivo
						    ),
						); 
        }
    }

    public function UploadFile(Request $request)
    {
    	if (($request->hasFile('file'))) {


            $file = Input::file('file');
            $NombreArchivo=Str::random(40).".".$file->getClientOriginalExtension();
            $Peso=$file->getSize();
            $Extension=$file->getClientOriginalExtension();
            $file->move(public_path().'/img/lecciones_file/', $NombreArchivo);


            return array("success" => 1,
						    "file" =>array(
						        "url" => '../img/lecciones_file/'.$NombreArchivo,
						        "size" => $Peso,
						        "name" => "Archivo",
						        "extension" => $Extension,

						    ),
						); 
        }
    }
}
