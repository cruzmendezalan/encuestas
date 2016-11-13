<?php

namespace encuestas\Http\Controllers;

use Illuminate\Http\Request;

use encuestas\Http\Requests;
use encuestas\Http\Controllers\Controller;
use encuestas\Egresado;
use encuestas\identificacionEgresado;
use encuestas\EstudiosUTM;
use encuestas\DatosTrabajoActual;
use encuestas\Empleadores;
use encuestas\DesarrolloProfesional;




class LogicaEgresadosController extends Controller
{
    //const $LONGITUDMINIMADEJSON  = 10;// Contemplando que se envíe nombres falsos o muy cortos

    /**
     * Muesta de la encuesta a egresados
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('egresados/egresados');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     * Se recibe el formulario completo de la encuesta, este se divide en secciones y es enviado a cada colección para ser insertado en MONGO.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Respaldo del request original
        $requestOriginal = $request;

        //Obtener solo los campos de la identificacion del egresado
        $request = $request->only(
                            "fechaderespuesta",
                            "nombre",
                            "curp",
                            "genero",
                            "fechadenacimiento",
                            "nacionalidad",
                            "lugardeorigen",
                            "lugardetrabajo",
                            "telefonodecontacto",
                            "correoelectronico");

        $egresado = Egresado::create();
        $identificacionegresadoEncuesta = $egresado->identificacionegresado()->create( $request);
        $egresado->save();

        //Obtener solo los campos de los estudios en la UTM
        $request = $requestOriginal;
        $estudiosenutmReq       = $request->only(
                                            "carrera",
                                            "fechadetitulacion",
                                            "fechadeinicioestudios",
                                            "maestria",
                                            "maestriatitulo",
                                            "doctorado",
                                            "doctoradotitulo");

        $estudiosenutmEncuesta  = $egresado->estudiosutm()->create($estudiosenutmReq);
        $egresado->save();

        //Obtener solo los campos de los datos del trabajo actual
        $request = $requestOriginal;
        $datostrabajoactualReq      = $request->only(
                                            "nombreempresa",
                                            "tipodeempresa",
                                            "fechadeingreso",
                                            "puestoactual",
                                            "puestoinicial",
                                            "tipodehorariolaboral",
                                            "tipodecontrato",
                                            "telefonodeempresa",
                                            "ingresomensual");

        $datostrabajoactualEncuesta = $egresado->datostrabajoactual()->create($datostrabajoactualReq);
        $egresado->save();
        $request = $requestOriginal;
        
        //Obtener solo los campos de la satisfaccion profesional
        $satisfacionprofesionalReq  = $request->only(
                                            "tiempoprimerempleo",
                                            "difucultadprimerempleo",
                                            "formacionrecibida",
                                            "carecesconocimientos",
                                            "carecesareasdeconocimiento",
                                            "valores",
                                            "calificacioninstalaciones",
                                            "serviciosescolares",
                                            "calificacionequipos",
                                            "calificacionlimpieza", 
                                            "calificaciondocentes",
                                            "calificaciontecnicas",
                                            "calificacionevaluacion",
                                            "continuariasestudios");

        $satisfacionprofesional = $egresado->satisfacciondelaformacionprofesional()->create($satisfacionprofesionalReq);
        $egresado->save();

        $request = $requestOriginal;
        $recomendacionesegresadoReq    = $request->only(
                                            "recomendaciones");
        $recomendaciones = $egresado->recomendacionesdelegresado()->create($recomendacionesegresadoReq);
        $egresado->save();

        $request = $requestOriginal;
        $req = $request->get("desarrolloprof");
        
        if( strlen($req) > 10 ){
            $empleos = $this->stringToJSON($req);
            foreach($empleos as $empleo){
                $desarrolloprofesional = $egresado
                                            ->desarrolloprofesional()
                                                ->create([
                                                    "empresaenlaquelaboro"  => $empleo[0]->empresaenlaquelaboro,
                                                    "puestoinicial"         => $empleo[0]->puestoinicial,
                                                    "puestofinal"           => $empleo[0]->puestofinal,
                                                    "antiguedad"            => $empleo[0]->antiguedad,
                                                    "funcionesprincipales"  => $empleo[0]->funcionesprincipales 
                                                    ])
                                                ->save();
            }
        }
        return view('agradecimiento.gracias');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function stringToJSON($jsonstr){
        return json_decode($jsonstr);
    }
}
