<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
 |
 |--------------------------------------------------------------------------
 |Genero las vistas de la aplicacion
 |--------------------------------------------------------------------------
 |
 */
Route::get('/', function()
{
	return View::make('inde');
});

Route::get('main', function()
{
	return View::make('main');
});

Route::get('registro_usuario', function()
{
	return View::make('modules/registro');
});

Route::get('resilencia', function()
{
	return View::make('modules/resilencia');
});
/*
 |
|--------------------------------------------------------------------------
|Llamo a los controladores de la aplicacion
|--------------------------------------------------------------------------
|
*/
Route::post('login', 'LoginController@logIn');
Route::get('logout', 'LoginController@logOut');
