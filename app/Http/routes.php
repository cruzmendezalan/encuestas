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


Route::get('/', ['uses'=>'TestController@index']);

Route::get('empleadores', function (){
	return view('empleadores/empleadores');
});
//Route::get('egresados', ['uses'=>'LogicaEgresadosController@index']);
// Route::get('gracias',function(){
// 	return view('agradecimiento.gracias');
// });

Route::resource('egresados','LogicaEgresadosController');
