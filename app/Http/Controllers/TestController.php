<?php 
namespace encuestas\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use encuestas\Http\Requests;
use encuestas\Http\Controllers\Controller;
use encuestas\Egresado;

class TestController extends Controller{
	
	public function index(){
		//$datoDePrueba = new Egresados();
		//$datoDePrueba->nombre = "Esmeralda";
		//$datoDePrueba->save();
		// User::where('age', 'exists', true)->get();
		//$egresados = Egresado::where("nombre","exists",true)->get(["nombre"]);
		return view("welcome")->with("egresados",$this->insercionMongo());
		//return phpinfo();
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