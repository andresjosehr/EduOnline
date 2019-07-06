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

Route::get('login', function () {

	if($user = Auth::user()){
            return redirect("panel-de-control");
        } else {
            return view('seguridad.registro'); 
        }
});

Route::get('seguridad/{provider}', 'SeguridadController@redirectToProvider')->name('seguridad.facebook');
Route::get('seguridad/{provider}/callback', 'SeguridadController@handleProviderCallback');

Route::get('/seguridad/{provider}', 'SeguridadController@getSocialRedirect')->name('seguridad.google');
Route::get('/seguridad/{provider}', 'SeguridadController@getSocialHandle')->name('handleSocialLite');


Route::group(['middleware' => ['ValidarSesion']], function () {
	Route::get('panel-de-control', function () {
	    echo "Estas Logueado";
	    echo "<br>";
	    echo "<a href='cerrar-sesion'>Cerrar Sesion</a>";
	});
});


// Auth::routes();