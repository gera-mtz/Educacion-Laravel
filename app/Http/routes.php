<?php
//routes.php
//aqui es el control de rutas de las peticiones que realize dentro del domino
//de la pagina. Solo fueron agregadas las redes sociales

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('login', 'loginController@getLogin');
Route::post('login', 'loginController@postLogin');
Route::get('logout', 'loginController@getLogout');
Route::get('/', 'HomeController@showInicio');
Route::post('welcome', function () {
		return view('perfil');
	});

Route::get('welcome', function () {
		return view('perfil');
	});

//!!!!!!!!!!!!!!!Rutas para redes sociales!!!!!!!!!!!!!!!!

//redireccion a la pagina de la red social que uso para su inicio de sesion y permisos para usar la app
Route::get('auth/{provider?}', 'Auth\AuthController@redirectToProvider');

//recepcion del callback URL para direccionar a la pagina principal
Route::get('auth/{provider?}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('master', function () {
	return view('layouts.master');
});
Route::get('perfil', function () {
	return view('perfil');
});
Route::get('grupos', function () {
	return view('grupos');
});
Route::get('tareaspract', function (){
	return view('tareaspracticas');
});
Route::get('notas', function (){
	return view('notas');
});
Route::get('inicio', function (){
	return view('bienvenido');
});
Route::post('inicio', function (){
	return view('bienvenido');
});