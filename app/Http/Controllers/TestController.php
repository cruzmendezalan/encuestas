<?php 
namespace encuestas\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use encuestas\Http\Requests;
use encuestas\Http\Controllers\Controller;
use encuestas\Egresados;

class TestController extends Controller{
	
	public function index(){
		//$datoDePrueba = new Egresados();
		//$datoDePrueba->nombre = "Esmeralda";
		//$datoDePrueba->save();
		// User::where('age', 'exists', true)->get();
		$egresados = Egresados::where("nombre","exists",true)->get(["nombre"]);
		return view("welcome")->with("egresados",$egresados);
	}
}
?>