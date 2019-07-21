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

Route::get('registro', function(){return view("seguridad/registro");});

Route::post('seguridad/registro', "SeguridadController@Registro");

// Route::get('/seguridad/{provider}', 'SeguridadController@getSocialRedirect')->name('seguridad.google');
// Route::get('/seguridad/{provider}', 'SeguridadController@getSocialHandle')->name('handleSocialLite');





Route::group(['middleware' => ['ValidarSesion']], function () {
	Route::get('panel-de-control', function () {
	    echo "Estas Logueado";
	    echo "<br>";
	    echo "<a href='cerrar-sesion'>Cerrar Sesion</a>";
	});
	Route::resource('perfil/', 'PerfilController');
	Route::get('cerrar_sesion/', 'SeguridadController@CerrarSesion');


	Route::get('escritorio', 'GeneralController@Escritorio');

	Route::get('perfil', function(){return view("perfil");});
	Route::get('foro', function(){return view("foro");});
	Route::get('descubrir', function(){return view("descubrir");});
	Route::get('ranking', function(){return view("ranking");});
	Route::get('ver-perfil', function(){return view("perfil_usuario");});

});

Route::resource('Prueba', 'PruebaController');