<?php

namespace App\Http\Controllers;

use Auth;
use Socialite;
use App\Usuarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Entities\SocialLite\SocialEntity;
use Laravel\Socialite\Facades\Socialite;
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
	        return Socialite::driver($provider)->redirect();
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
				


				// //Si no lo tiene crea el usuatrio
				// if(empty($userInDB)) {

				// 	$userInDB = new User;
				//     $userInDB->email = $socialUser->email;
				// }

				// $userInDB->name = $socialUser->name; //Actualiza el name
				// $userInDB->save();
					        

				// auth()->login($userInDB, true);//Autentica al usuario
					        
				// return redirect('/home');//Redirecciona al home
		}




		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		///////
		/////// Login y refireccion
		///////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	    public function authAndRedirect($user){
	        Auth::login($user);
	        return redirect()->to('panel-de-control');
	    }
}
