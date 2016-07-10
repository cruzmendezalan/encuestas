<?php 
namespace encuestas\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use encuestas\Http\Requests;
use encuestas\Http\Controllers\Controller;
use encuestas\Egresado;
use Faker\Factory as Faker;

class TestController extends Controller{
	
	public function index(){
		return view("welcome");
	}
	private function insercionMongo(){
		$egresado = Egresado::where("nombre","=","Esmeralda")->get();
		$egresado->mensaje = "bienvenida";
		$egresado->push('messages','saludo');
		//$egresado->save();
		return $egresado;
	}
}
?>