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




class LogicaEgresadosController extends Controller
{
    

    /**
     * Display a listing of the resource.
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
     * Se recibe el formulario completo de la encuesta, este se divide en secciones y es enviado a cada collección para ser insertado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestOriginal = $request;
        $request = $request->only(
                            "fechaderespuesta",
                            "nombre",
                            "genero",
                            "fnac",
                            "nacionalidad",
                            "lorigen",
                            "ltrabajo",
                            "tcontacto",
                            "correoelectronico");

        //$identificacionegresadoEncuesta = new identificacionEgresado($request);
        $egresado = Egresado::create();
        $identificacionegresadoEncuesta = $egresado->identificacionegresado()->create( $request);
        $egresado->save();

        $request = $requestOriginal;
        $estudiosenutmReq       = $request->only(
                                            "carrera",
                                            "ftitulacion",
                                            "finiestudios",
                                            "maestria",
                                            "maestriatitulo",
                                            "doctorado",
                                            "doctoradotitulo");

        //$estudiosenutmEncuesta  = new EstudiosUTM($estudiosenutmReq);
        $estudiosenutmEncuesta  = $egresado->estudiosutm()->create($estudiosenutmReq);
        $egresado->save();

        $request = $requestOriginal;
        $datostrabajoactualReq      = $request->only(
                                            "nempresa",
                                            "tempresa",
                                            "fingreso",
                                            "pactual",
                                            "pinicial",
                                            "thorario",
                                            "tcontrato",
                                            "imensual");

        // $datostrabajoactualEncuesta = new DatosTrabajoActual($datostrabajoactualReq);
        $datostrabajoactualEncuesta = $egresado->datostrabajoactual()->create($datostrabajoactualReq);
        $egresado->save();
        $request = $requestOriginal;
        
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
        return dd($egresado);
        
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
}
