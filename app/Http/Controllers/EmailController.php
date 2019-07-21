<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function ResetPass($Email, $CodigoPassword)
    {

    	$Data = array('Email' => $Email, "Codigo" => $CodigoPassword);

        Mail::send("emails.reset_pass", ["Data" => $Data], function($mensaje) use ($Data) {
            $mensaje->from("joseandreshernandezross@gmail.com", "Curso Laravel");
            $mensaje->to($Data["Email"], "Reseteo de Contraseña")->subject("Reseteo de Contraseña");
        });

        return "EmailResetEnviado()";
    }
}
