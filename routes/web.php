<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return redirect("login"); });
Route::get('cerrar-sesion', function () { Auth::logout(); return redirect('/login'); });

Route::get('login/{reset_password?}', function ($reset_password = null) {

	if($user = Auth::user()){
	    return redirect("escritorio");
	} else {
	    return view('seguridad.login', ["reset_password" => $reset_password]); 
	}
});

Route::get('seguridad/{provider}', 'SeguridadController@redirectToProvider')->name('seguridad.facebook');
Route::get('seguridad/{provider}/callback', 'SeguridadController@handleProviderCallback');
Route::post('seguridad/email', 'SeguridadController@IngresarEmail');

Route::get('reset-pass', function(){return view("seguridad/reset_password");});

Route::post('reset-pass', "SeguridadController@ResetPass");
Route::get('reset-pass-2/{codigo}', "SeguridadController@ResetPass2");
Route::post('reset-pass-2/{codigo}', "SeguridadController@ResetPass3");

Route::get('registro', function(){ return view("seguridad/registro"); });

Route::post('seguridad/registro', "SeguridadController@Registro");

// Route::get('/seguridad/{provider}', 'SeguridadController@getSocialRedirect')->name('seguridad.google');
// Route::get('/seguridad/{provider}', 'SeguridadController@getSocialHandle')->name('handleSocialLite');





Route::group(['middleware' => ['ValidarSesion']], function () {
	
	Route::get('escritorio/', 'GeneralController@Escritorio')->name("escritorio");

	Route::resource('perfil', 'PerfilController');

	Route::get('cerrar_sesion/', 'SeguridadController@CerrarSesion');
	Route::get('cambio-pass/', function(){return view("perfil.cambio_pass");})->name("cambio-pass");
	Route::post('cambio-pass/', "PerfilController@CambioPass");


	Route::get('crear/', function(){return view("constructores.index");} );


	Route::prefix('crear')->group(function () {

		Route::post('clase', "Constructores\LeccionesController@CrearClase" );
		Route::prefix('lecciones')->group(function () {
		    	Route::get('/{id_leccion}', function () { return view("constructores.lecciones.crear"); });
		    	Route::post('subir-foto-leccion', "Constructores\LeccionesController@SubirFotoLeccion");
		    	Route::post('subir-foto-clase', "Constructores\LeccionesController@SubirFotoClase");
		    	Route::post('crear-leccion', "Constructores\LeccionesController@CrearLeccion");
		    	Route::post('eliminar-leccion', "Constructores\LeccionesController@EliminarLeccion");
		    	Route::post('duplicar-leccion', "Constructores\LeccionesController@DuplicarLeccion");
		    	Route::post('update-contenido-lecciones', "Constructores\LeccionesController@UpdateContenidoLecciones");
		});
	});


	Route::get('recursos', function(){return view("consulta_recursos.index");} )->name("recursos");;

	Route::prefix('editor-js')->group(function () {
    	Route::get('embebed-link', "EditorController@EmbebedLink");
    	Route::post('upload-img', "EditorController@UploadImg");
    	Route::post('upload-file', "EditorController@UploadFile");
	});

	Route::get('foro', function(){return view("foro");})->name("foro");
	Route::get('descubrir', function(){return view("descubrir");})->name("descubrir");
	// Route::get('ranking', function(){return view("ranking");});
	// Route::get('ver-perfil', function(){return view("perfil_usuario");});
	Route::get('survey', function(){return view("survey");})->name("survey");
});

Route::resource('Prueba', 'PruebaController');