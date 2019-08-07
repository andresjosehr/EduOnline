<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Str;
use Socialite;
use Validator;
use App\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmailController;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;

class SeguridadController extends Controller
{
    

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////
	/////// Inicio de los metodos necesarios para inicio de sesion y registro de facebook
	///////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	    // Metodo encargado de la redireccion a Facebook
	    public function redirectToProvider($provider)
	    {
	        return Socialite::driver($provider)->asPopup()->redirect();
	    }
	    
	    // Metodo encargado de obtener la información del usuario
	    public function handleProviderCallback($provider)
	    {
	        // Obtenemos los datos del usuario
	        $social_user = Socialite::driver($provider)->user(); 
	        // return $social_user;
	        // Comprobamos si el usuario ya existe

	        if ($user = Usuarios::where('email', $social_user->email)->first()) { 
	            return $this->authAndRedirect($user); // Login y redirección
	        } else {  
	            // En caso de que no exista creamos un nuevo usuario con sus datos.
	            $user = Usuarios::create([
	                'nombres' => $social_user->name,
	                'email' => $social_user->email,
	                'avatar' => $social_user->avatar,
	            ]);
	 
	            return $this->authAndRedirect($user); // Login y redirección
	        }
	    }
	 

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////
	/////// Fin de los metodos necesarios para inicio de sesion y registro de facebook
	///////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////
	/////// Inicio de los metodos necesarios para inicio de sesion y registro de google
	///////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	    //Redirecciona el navegador al proveedor de oauth correspondiente
		    
		public function getSocialRedirect( $provider ){
		
			$providerKey = Config::get('services.' . $provider);
					        
			if (empty($providerKey)) return view('pages.status')->with('error','No such provider');
				        
			return Socialite::driver( $provider )->redirect();
		}
		
			//Recibe el login exitoso del proveedor, crea el usuario si no existe y si existe actualiza valores, también guarda el id de usuario del proveedor.
					    
			public function getSocialHandle($provider){
					        
				if (Input::get('denied') != '') abort(500, "No le diste permiso a nuestra aplicación para acceder a tu cuenta.");
				    
				//Datos de usuario retornados por el proveedor de servicio
				$socialUser = Socialite::driver($provider)->user();
				    
				//Verifica si el email ya lo tiene un usuario
				$userInDB = Usuarios::where('email', '=', $socialUser->email)->get()->first();


				print_r($socialUser);
				die();
				


				//Si no lo tiene crea el usuatrio
				if(empty($userInDB)) {

					$userInDB = new User;
				    $userInDB->email = $socialUser->email;
				}

				$userInDB->name = $socialUser->name; //Actualiza el name
				$userInDB->save();	

					        

				auth()->login($userInDB, true);//Autentica al usuario
					        
				return redirect('/home');//Redirecciona al home
		}




		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Inicio de los metodos necesarios para inicio de sesion por formulario de acceso
		///////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


		public function IngresarEmail(Request $Request)
		{
			if (Auth::attempt(['email' => $Request->user, 'password' => $Request->password])){
			 	Auth::login(Usuarios::where("email", $Request->user)->first()); 
			 	return "ExitoLogin()";
			} 
			if (Auth::attempt(['username' => $Request->user, 'password' => $Request->password])){
				Auth::login(Usuarios::where("username", $Request->user)->first()); 
				return "ExitoLogin()";
			} 

			return "ErrorLogin()";
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Fin de los metodos necesarios para inicio de sesion por formulario de acceso
		///////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Login y redireccion de redes sociales
		///////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	    public function authAndRedirect($user){
	        Auth::login($user);
	        return redirect()->to('escritorio');
	    }

	    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Fin Login y refireccion
		///////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////



	    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Cierre de sesion (logout)
		///////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	    function CerrarSesion()
	    {
	    	Auth::logout();
  			return redirect('/login');
	    }

	    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Fin de Cierre de sesion (logout)
		/////// 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////



		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Funcion que procesa los datos para el reseteo de contraseña y el envio del email para el reseteo
		/////// 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


		public function ResetPass(Request $Request, $codigo = null)
		{

			if (Usuarios::where("email", $Request->email)->first()) {

				$PasswordCode=Str::random(50);
				 Usuarios::where("email", $Request->email)->update(["password_code" => $PasswordCode]);

				$EnvioEmail = new EmailController();
				return $EnvioEmail->ResetPass($Request->email, $PasswordCode);

			} else{
				return "EmailResetNoEnviado()";
			}
		}
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Fin
		/////// 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////




		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Funcion que verifica el codigo de la url para resetar la contraseña
		/////// 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		public function ResetPass2($codigo)
		{


			if (Usuarios::where("password_code", $codigo)->first()) {

				return view("seguridad.reset_password_2", ["Codigo" => $codigo]);

			} else{
				return redirect("login");
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Fin
		/////// 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////




		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Funcion de registro de la nueva contraseña en el reseteo de la contraseña
		/////// 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		public function ResetPass3(Request $Request, $codigo)
		{
			Usuarios::where("password_code", $codigo)->update(["password" => Hash::make($Request->password), "password_code" => NULL]);

			return "ReseteoExitoso()";
		}
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Fin
		/////// 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Funcion de registro de usuario por el formulario
		/////// 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


		public function Registro(Request $Request)
		{
		    $v = Validator::make($Request->all(), [
	            'email' => 'required|unique:usuarios|email',
		        'username' => 'required|unique:usuarios',
		        'password' => 'required|min:8',
		        'espacio_trabajo' => 'required',
	        ]);
	 
	        if ($v->fails()) return "MostrarErrores(`".$v->errors()."`)";

	        $Request->merge(["email_confirm_code" => Str::random(50)]);
	        $Request->merge(["password" => Hash::make($Request->password)]);

			Usuarios::insert($Request->except("accept_terms_checkbox_input"));
			Auth::login(Usuarios::where("email", $Request->email)->first());

			$EnvioEmail = new EmailController();
			$EnvioEmail->confirmEmail($Request->email, $Request->email_confirm_code);

			return "ExitoRegistro()";
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Fin
		/////// 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
