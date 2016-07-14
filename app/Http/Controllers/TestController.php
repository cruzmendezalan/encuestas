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

	public function reporte(){
		
	}

	public function testEmpleos(Request $request){
		$req = $request->get("empleos");
		$empleos = $this->stringToJSON($req);
		//return ($json[0][0]->emplab); //unico atributo
		$egresado = Egresado::find('57818dd15e28853371439c56');
		foreach($empleos as $empleo){
			$desarrolloprofesional = $egresado
										->desarrolloprofesional()
											->create([
												"empresaenlaquelaboro" 	=> $empleo[0]->empresaenlaquelaboro,
												"puestoinicial"  		=> $empleo[0]->puestoinicial,
												"puestofinal"  			=> $empleo[0]->puestofinal,
												"antiguedad" 			=> $empleo[0]->antiguedad,
												"funcionesprincipales" 	=> $empleo[0]->funcionesprincipales 
												])
											->save();
		}
		return var_dump($egresado->desarrolloprofesional());
		// return var_dump($empleos[0][0]->puestoinicial);
	}

	private function stringToJSON($jsonstr){
		return json_decode($jsonstr);
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