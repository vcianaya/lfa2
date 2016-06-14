<?php

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
Route::get('login',  ['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');
Route::post('registro','LoginController@registro');

Route::group(['middleware' => 'auth'], function () {
Route::get('/', function()
{
	return View::make('administrador.plato.agregar');
});
Route::any('agregar/plato', 'PlatosController@agregarPlato');
Route::any('guardar/plato', 'PlatosController@guardarPlato');
Route::any('administrar/plato', 'PlatosController@listarPlatos');
Route::any('administrar/menu', 'MenuController@listarmenu');
Route::any('eliminar/plato', 'PlatosController@eliminar');
Route::any('editar/plato', 'PlatosController@editar');
Route::any('editguarda/plato', 'PlatosController@eguardarPlato');
Route::any('menu',['as'=>'menu','uses'=>'MenuController@index']);
Route::any('hola', 'HolaController@holac');
Route::any('menu/show','MenuController@show');
Route::any('menu/lista','MenuController@menuLista');
Route::any('menu/quitar','MenuController@quitarplato');
Route::any('vaciar','MenuController@vaciarMenu');
Route::any('menu/guardar','MenuController@guradarMemu');
Route::post('cliente/registrar','ClienteController@store');
Route::get('ver', function()
{
 	$id = \Request::input('id');  
 	$plato = DB::table('plato')->where('ID_PLA', $id)->first();
	$cart = \Session::get('cart');
	$cart[$id] = $plato;
	\Session::put('cart', $cart);
	return View::make('administrador.menu.frmlistamenu', compact('cart'));
	
});
});