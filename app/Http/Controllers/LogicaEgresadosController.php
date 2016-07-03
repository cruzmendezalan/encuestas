<?php

namespace encuestas\Http\Controllers;

use Illuminate\Http\Request;

use encuestas\Http\Requests;
use encuestas\Http\Controllers\Controller;
use encuestas\Egresado;
use encuestas\IdentificacionEgresado;

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
        $identificacionegresadoReq = $request->only(
                                            "fechaderespuesta",
                                            "nombre",
                                            "genero",
                                            "fnac",
                                            "nacionalidad",
                                            "lorigen",
                                            "ltrabajo",
                                            "tcontacto",
                                            "correoelectronico");
        //Nuevo egresado
        $egresado = new Egresado();
        //Union entre los datos de identificacion y el egresado
        $datosDeIdentificacion = $egresado->identificacionegresado()->create($identificacionegresadoReq);
        //Almacenando la relación
        $datosDeIdentificacion->save();

        $estudiosenutmReq           = $request->only(
                                            "carrera",
                                            "ftitulacion",
                                            "finiestudios",
                                            "maestria",
                                            "maestriatitulo",
                                            "doctorado",
                                            "doctoradotitulo");
        $datostrabajoactualReq      = $request->only(
                                            "nempresa",
                                            "tempresa",
                                            "fingreso",
                                            "pactual",
                                            "pinicial",
                                            "thorario",
                                            "tcontrato",
                                            "imensual");
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
        $recomendacionesegresado    = $request->only(
                                            "recomendacionesegresado");
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
