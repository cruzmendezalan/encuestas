<?php 
namespace encuestas\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use encuestas\Http\Requests;
use encuestas\Http\Controllers\Controller;
use encuestas\Pruebas;

class TestController extends Controller{
	
	public function index(){
		$datoDePrueba = new Pruebas();
		$datoDePrueba->nombre = "Alan";
		$datoDePrueba->save();
		print_r(Pruebas::all());
		return view("welcome");
	}
}
?>