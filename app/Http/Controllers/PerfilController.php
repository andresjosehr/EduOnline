<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Str;
use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\EmailController;


class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("perfil");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo)
    {
        $Usuario=Usuarios::where("email_change_code", $codigo)->first();
        if ($Usuario) {

            Usuarios::where("email_change_code", $codigo)->update([
                "email" => $Usuario->nuevo_email,
                "nuevo_email" => NULL,
                "email_change_code" => NULL
            ]);

            Auth::logout();
            Auth::login($Usuario);

            return redirect()->to('escritorio?email-cambiado');

        } else{
            return redirect("login");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         if (($request->hasFile('file'))) {

            $file = Input::file('file');
            $NombreArchivo=Str::random(40).".".$file->getClientOriginalExtension();

            $file->move(public_path().'/img/fotos_perfil/', $NombreArchivo);

            Usuarios::where("id", $id)->update(["avatar" => $NombreArchivo]);


            return "ExitoActualizarAvatar('".$NombreArchivo."')";
        }
        


        $v = Validator::make($request->all(), [
            'email' => 'required|email|unique:usuarios,email,'.$id,
            'username' => 'required|unique:usuarios,username,'.$id,
            'nombres' => 'required',
            'espacio_trabajo' => 'required',
        ]);
     
            if ($v->fails()) return "MostrarErrores(`".$v->errors()."`)";

            if (Auth::user()->email!=$request->email) {
                Usuarios::where("id", $id)->update($request->except("email"));

                $EmailCode=Str::random(50);

                Usuarios::where("id", $id)->update([
                    "email_change_code" => $EmailCode,
                    "nuevo_email" => $request->email,
                ]);

                $EnvioEmail = new EmailController();
                $EnvioEmail->ChangeEmail($request->email, $EmailCode);

                Auth::logout();
                Auth::login(Usuarios::where("id", $id)->first());  


                return "UpdatePerfilExito('Datos actualizados exitosamente. Hemos enviado un email para completar el cambio de correo electronico de tu cuenta')";   
            } else{
                Usuarios::where("id", $id)->update($request->all());
                return "UpdatePerfilExito('Datos actualizados exitosamente.')";
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
