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
Route::get('test', ['uses'=>'TestController@test']);

Route::get('empleos', ['uses'=>'TestController@testEmpleos']);

// Route::get('empleadores', function (){
// 	return view('empleadores/empleadores');
// });
Route::resource('egresados','LogicaEgresadosController');
Route::resource('empleadores','LogicaEmpleadoresController');

// Route::get('reportes',['uses'=>'ReportesController@index']);
Route::get('reportes/egresados', ['uses' => 'PDFController@reporteEncuestaEgresados']);
Route::get('reportes/empleadores', 'PDFController@reporteEncuestaEmpleadores');