<?php

namespace encuestas\Http\Controllers;

use Illuminate\Http\Request;
use encuestas\Http\Requests;
use encuestas\Http\Controllers\Controller;
use encuestas\Egresado;

class PDFController extends Controller{
    
    public function reporteEncuestaEgresados(){ 
        /*-------------------------------*/
        


        /*-------------------------------*/
        //return dd($this->generate_egresados_report());
        $egresados = $this->generate_egresados_report();
        $view =  \View::make('pdf.reporteEncuestaEgresados', compact("egresados"))->render();
        //return \View::make('pdf.reporteEncuestaEgresados', compact('egresados'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }

    public function reporteEncuestaEmpleadores(){
        return \View::make('pdf.reporteEncuestaEmpleadores');
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "3222";
        $view =  \View::make('pdf.reporteEncuestaEmpleadores', compact('data', 'date', 'invoice'))->render();
        // return \View::make('pdf.reporteEncuestaEmpleadores', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }

    private function generate_empleadores_report(){
        $empleadores = Empleadores::all();
        
        $respuestas["conocimientos_excelente"] = 0;
        $respuestas["conocimientos_sobresaliente"] = 0;
        $respuestas["conocimientos_aceptable"] = 0;
        $respuestas["conocimientos_insuficiente"] = 0;
        $respuestas["conocimientos_deficiente"] = 0;

        $respuestas["carece_conocimientos"] = 0;
        $respuestas["requiere_conocimientos"] = 0;
        $respuestas["habilidades"] = 0;
        $respuestas["no_habilidades"] = 0;
        $respuestas["carece_habilidades"] = 0;
        $respuestas["habilidades_importantes"] = 0;
        $respuestas["habilidades_no_demostradas"] = 0;
        
        $respuestas["factores_contratar_nocompetencias"] = 0;
        $respuestas["factores_contratar_ser_utm"] = 0;
        $respuestas["factores_contratar_no_titulado"] = 0;
        $respuestas["factores_contratar_no_ingles"] = 0;
        $respuestas["factores_contratar_no_seleccion"] = 0;
        $respuestas["factores_contratar_no_socio_comunicativas"] = 0;

       
        $respuestas["continuar_contratando_si"] = 0;
        $respuestas["continuar_contratando_no"] = 0;
       
        return $respuestas;
    }

    private function generate_egresados_report(){
        $egresados = Egresado::all();
        $respuestas = array(); 
        $respuestas['numeroDeEncuestados']  = 0;
        $respuestas['mujeres']              = 0;
        $respuestas['hombre']               = 0;
        
        $respuestas['menos6meses']          = 0;
        $respuestas['mas6menos9']           = 0;
        $respuestas['mas10menos12']         = 0;
        $respuestas['masunanio']            = 0;
        $respuestas['notrabajo']            = 0;
        $respuestas['sinEmpleo']            = 0;

        $respuestas['nocompetenciaslaborales'] = 0;
        $respuestas['seregresadoutm']          = 0;
        $respuestas['notitulado']              = 0;
        $respuestas['noingles']                = 0;
        $respuestas['noexamenseleccion']       = 0;
        $respuestas['nosociocomunicativas']    = 0;

        $respuestas['formacionrecibida_excelente']  = 0;
        $respuestas['formacionrecibida_muy_buena'] = 0;
        $respuestas['formacionrecibida_buena']     = 0;
        $respuestas['formacionrecibida_regular']   = 0;
        $respuestas['formacionrecibida_mala']      = 0;


        $respuestas['sectorPrivado']        = 0;
        $respuestas['sectorPublico']        = 0;
        $respuestas['empresaPropia']        = 0;
        $respuestas['autoempleados']        = 0;
        $respuestas['otros']                = 0;
        $respuestas['tiempocompleto']       = 0;
        $respuestas['tiempocompleto']       = 0;
        $respuestas['mediotiempo']          = 0;
        $respuestas['eventual']             = 0;

        $respuestas['tiempoprimerempleo']         = 0;
        $respuestas['difucultadprimerempleo']     = 0;
        $respuestas['formacionrecibida']          = 0;
        $respuestas['carecesconocimientos']       = 0;
        $respuestas['carecesareasdeconocimiento'] = 0;
        $respuestas['valores']                    = 0;
        $respuestas['calificacioninstalaciones']  = 0;
        $respuestas['serviciosescolares']         = 0;
        $respuestas['calificacionequipos']        = 0;
        $respuestas['calificacionlimpieza"']      = 0;
        $respuestas['calificaciondocentes']       = 0;
        $respuestas['calificaciontecnicas']       = 0;
        $respuestas['calificacionevaluacion']     = 0;
        $respuestas['continuariasestudios']       = 0;


        $respuestas['formacion_profesional_formacionrecibida_excelente']  = 0;                          
        $respuestas['formacion_profesional_formacionrecibida_muybuena']   = 0;                          
        $respuestas['formacion_profesional_formacionrecibida_buena']      = 0;                          
        $respuestas['formacion_profesional_formacionrecibida_regular']    = 0;                          
        $respuestas['formacion_profesional_formacionrecibida_mala']       = 0;                          

        $respuestas['formacion_profesional_carecesconocimientos_si']      = 0;                          
        $respuestas['formacion_profesional_carecesconocimientos_no']      = 0;                          

        $respuestas['formacion_profesional_carecesareasdeconocimiento_si']= 0;                          
        $respuestas['formacion_profesional_carecesareasdeconocimiento_no']= 0;                          

        // $respuestas['formacion_profesional_valores_excelente'] = 0;                          
        // $respuestas['formacion_profesional_valores_muybuena']  = 0;                          
        // $respuestas['formacion_profesional_valores_buena'] = 0;                          
        // $respuestas['formacion_profesional_valores_regular']   = 0;                          
        // $respuestas['formacion_profesional_valores_mala']  = 0;                          

        $respuestas['formacion_profesional_calificacioninstalaciones_excelente'] = 0;                          
        $respuestas['formacion_profesional_calificacioninstalaciones_muybuena']  = 0;                          
        $respuestas['formacion_profesional_calificacioninstalaciones_buena']     = 0;                          
        $respuestas['formacion_profesional_calificacioninstalaciones_regular']   = 0;                          
        $respuestas['formacion_profesional_calificacioninstalaciones_mala']      = 0;                          

        $respuestas['formacion_profesional_serviciosescolares_excelente'] = 0;                          
        $respuestas['formacion_profesional_serviciosescolares_muybuena']  = 0;                          
        $respuestas['formacion_profesional_serviciosescolares_buena']     = 0;                          
        $respuestas['formacion_profesional_serviciosescolares_regular']   = 0;                          
        $respuestas['formacion_profesional_serviciosescolares_mala']      = 0;                          

        $respuestas['formacion_profesional_calificacionequipos_excelente']= 0;                          
        $respuestas['formacion_profesional_calificacionequipos_muybuena'] = 0;                          
        $respuestas['formacion_profesional_calificacionequipos_buena']    = 0;                          
        $respuestas['formacion_profesional_calificacionequipos_regular']  = 0;                          
        $respuestas['formacion_profesional_calificacionequipos_mala']     = 0;                          

        $respuestas['formacion_profesional_calificacionlimpieza_excelente'] = 0;                          
        $respuestas['formacion_profesional_calificacionlimpieza_muybuena']  = 0;                          
        $respuestas['formacion_profesional_calificacionlimpieza_buena']     = 0;                          
        $respuestas['formacion_profesional_calificacionlimpieza_regular']   = 0;                          
        $respuestas['formacion_profesional_calificacionlimpieza_mala']      = 0;                          

        $respuestas['formacion_profesional_calificaciondocentes_excelente'] = 0;                          
        $respuestas['formacion_profesional_calificaciondocentes_muybuena']  = 0;                          
        $respuestas['formacion_profesional_calificaciondocentes_buena']     = 0;                          
        $respuestas['formacion_profesional_calificaciondocentes_regular']   = 0;                          
        $respuestas['formacion_profesional_calificaciondocentes_mala']      = 0;                          

        $respuestas['formacion_profesional_calificaciontecnicas_excelente'] = 0;                          
        $respuestas['formacion_profesional_calificaciontecnicas_muybuena']  = 0;                          
        $respuestas['formacion_profesional_calificaciontecnicas_buena']     = 0;                          
        $respuestas['formacion_profesional_calificaciontecnicas_regular']   = 0;                          
        $respuestas['formacion_profesional_calificaciontecnicas_mala']      = 0;                          

        $respuestas['formacion_profesional_calificacionevaluacion_excelente'] = 0;                          
        $respuestas['formacion_profesional_calificacionevaluacion_muybuena']  = 0;                          
        $respuestas['formacion_profesional_calificacionevaluacion_buena']     = 0;                          
        $respuestas['formacion_profesional_calificacionevaluacion_regular']   = 0;                          
        $respuestas['formacion_profesional_calificacionevaluacion_mala']      = 0;                          

        $respuestas['formacion_profesional_continuariasestudios_si'] = 0;                          
        $respuestas['formacion_profesional_continuariasestudios_no'] = 0;   


        $respuestas['trabajo_actual_ingresomensual_menos5']      = 0;                       
        $respuestas['trabajo_actual_ingresomensual_mas5menos10'] = 0;                       
        $respuestas['trabajo_actual_ingresomensual_mas10']       = 0;                       



        $respuestas['numeroDeEncuestados'] = count($egresados);
        

        //return dd($egresados);  
        
        foreach ($egresados as $egresado) {
            $identificacion_egresado = $egresado->identificacionegresado;       
            /*
             * Contando hombres y mujeres
             */
            if($identificacion_egresado->genero == 'hombre'){
                $respuestas['hombre']++;
            }elseif ($identificacion_egresado->genero == 'mujeres') {
                $respuestas['mujer']++;
            }



            $satisfaccion_de_la_formacion_profesional = $egresado->satisfacciondelaformacionprofesional;
            //return dd($satisfaccion_de_la_formacion_profesional);  
            if (!empty($satisfaccion_de_la_formacion_profesional)) {
                 /*
                  * Contando tiempo que tardaron en encontrar su primer empleo
                  */
                if($satisfaccion_de_la_formacion_profesional->tiempoprimerempleo == 'menos6meses'){
                    $respuestas['menos6meses']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->tiempoprimerempleo == 'mas6menos9') {
                    $respuestas['mas6menos9']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->tiempoprimerempleo == 'mas10menos12') {
                    $respuestas['mas10menos12']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->tiempoprimerempleo == 'masunanio') {
                    $respuestas['masunanio']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->tiempoprimerempleo == 'notrabajo') {
                    $respuestas['notrabajo']++;
                }



                /*
                 * Contando dificultades de conseguir primer empleo
                 */
                if($satisfaccion_de_la_formacion_profesional->difucultadprimerempleo == 'hombre'){
                    $respuestas['nocompetenciaslaborales']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->difucultadprimerempleo == 'mujer') {
                    $respuestas['seregresadoutm']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->difucultadprimerempleo == 'mujer') {
                    $respuestas['notitulado']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->difucultadprimerempleo == 'mujer') {
                    $respuestas['noingles']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->difucultadprimerempleo == 'mujer') {
                    $respuestas['noexamenseleccion']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->difucultadprimerempleo == 'mujer') {
                    $respuestas['nosociocomunicativas']++;
                }


                 /*
                 * Contando la formación recibida
                 */
                if($satisfaccion_de_la_formacion_profesional->formacionrecibida       == 'excelente'){
                    $respuestas['formacionrecibida_excelente']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->formacionrecibida == 'muybuena') {
                    $respuestas['formacionrecibida_muy_buena']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->formacionrecibida == 'buena') {
                    $respuestas['formacionrecibida_buena']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->formacionrecibida == 'regular') {
                    $respuestas['formacionrecibida_regular']++;
                }elseif ($satisfaccion_de_la_formacion_profesional->formacionrecibida == 'mala') {
                    $respuestas['formacionrecibida_mala']++;
                }


                if ($satisfaccion_de_la_formacion_profesional->carecesconocimientos == 'si') {
                    $respuestas["carecesconocimientos"]++;
                }elseif ($satisfaccion_de_la_formacion_profesional->carecesconocimientos == 'no') {
                    $respuestas["carecesconocimientos"]++;
                }

                if ($satisfaccion_de_la_formacion_profesional->carecesareasdeconocimiento == 'si') {
                    $respuestas["formacion_profesional_carecesareasdeconocimiento_si"]++;
                }elseif ($satisfaccion_de_la_formacion_profesional->carecesareasdeconocimiento == 'no') {
                    $respuestas["formacion_profesional_carecesareasdeconocimiento_no"]++;
                }

                // if ($satisfaccion_de_la_formacion_profesional->valores) {
                //     $respuestas[]++;
                // }

                
                switch ($satisfaccion_de_la_formacion_profesional->calificacioninstalaciones) {
                    case 'excelentes':
                        $respuestas["formacion_profesional_calificacioninstalaciones_excelente"]++;
                        break;

                    case 'muybuena':
                        $respuestas["formacion_profesional_calificacioninstalaciones_muybuena"]++;
                        break;

                    case 'buena':
                        $respuestas["formacion_profesional_calificacioninstalaciones_buena"]++;
                        break;

                    case 'regular':
                        $respuestas["formacion_profesional_calificacioninstalaciones_regular"]++;
                        break;

                    case 'mala':
                        $respuestas["formacion_profesional_calificacioninstalaciones_malo"]++;
                        break;
                    
                    default:
                        break;
                }
                

                
                switch ($satisfaccion_de_la_formacion_profesional->serviciosescolares) {
                    case 'excelentes':
                        $respuestas["formacion_profesional_serviciosescolares_excelente"]++;
                        break;

                    case 'muybuena':
                        $respuestas["formacion_profesional_serviciosescolares_muybuena"]++;
                        break;

                    case 'buena':
                        $respuestas["formacion_profesional_serviciosescolares_buena"]++;
                        break;

                    case 'regular':
                        $respuestas["formacion_profesional_serviciosescolares_regular"]++;
                        break;

                    case 'mala':
                        $respuestas["formacion_profesional_serviciosescolares_mala"]++;
                        break;
                    
                    default:
                        break;
                }
                

                
                switch ($satisfaccion_de_la_formacion_profesional->calificacionequipos) {
                    case 'excelentes':
                        $respuestas["formacion_profesional_calificacionequipos_excelente"]++;
                        break;

                    case 'muybuena':
                        $respuestas["formacion_profesional_calificacionequipos_muybuena"]++;
                        break;

                    case 'buena':
                        $respuestas["formacion_profesional_calificacionequipos_buena"]++;
                        break;

                    case 'regular':
                        $respuestas["formacion_profesional_calificacionequipos_regular"]++;
                        break;

                    case 'mala':
                        $respuestas["formacion_profesional_calificacionequipos_mala"]++;
                        break;
                    
                    default:
                        break;
                }
                

                
                switch ($satisfaccion_de_la_formacion_profesional->calificacionlimpieza) {
                    case 'excelentes':
                        $respuestas["formacion_profesional_calificacionlimpieza_excelente"]++;
                        break;

                    case 'muybuena':
                        $respuestas["formacion_profesional_calificacionlimpieza_muybuena"]++;
                        break;

                    case 'buena':
                        $respuestas["formacion_profesional_calificacionlimpieza_buena"]++;
                        break;

                    case 'regular':
                        $respuestas["formacion_profesional_calificacionlimpieza_regular"]++;
                        break;

                    case 'mala':
                        $respuestas["formacion_profesional_calificacionlimpieza_mala"]++;
                        break;
                    
                    default:
                        break;
                }
                

                
                switch ($satisfaccion_de_la_formacion_profesional->calificaciondocentes) {
                    case 'excelentes':
                        $respuestas["formacion_profesional_calificaciondocentes_execlente"]++;
                        break;

                    case 'muybuena':
                        $respuestas["formacion_profesional_calificaciondocentes_muybuena"]++;
                        break;

                    case 'buena':
                        $respuestas["formacion_profesional_calificaciondocentes_buena"]++;
                        break;

                    case 'regular':
                        $respuestas["formacion_profesional_calificaciondocentes_regular"]++;
                        break;

                    case 'mala':
                        $respuestas["formacion_profesional_calificaciondocentes_mala"]++;
                        break;
                    
                    default:
                        break;
                }
                

                
                switch ($satisfaccion_de_la_formacion_profesional->calificaciontecnicas) {
                    case 'excelentes':
                        $respuestas["formacion_profesional_calificaciontecnicas_excelente"]++;
                        break;

                    case 'muybuena':
                        $respuestas["formacion_profesional_calificaciontecnicas_muybuena"]++;
                        break;

                    case 'buena':
                        $respuestas["formacion_profesional_calificaciontecnicas_buena"]++;
                        break;

                    case 'regular':
                        $respuestas["formacion_profesional_calificaciontecnicas_regular"]++;
                        break;

                    case 'mala':
                        $respuestas["formacion_profesional_calificaciontecnicas_mala"]++;
                        break;
                    
                    default:
                        break;
                }
                

                
                switch ($satisfaccion_de_la_formacion_profesional->calificacionevaluacion) {
                    case 'excelentes':
                        $respuestas["formacion_profesional_calificacionevaluacion_excelente"]++;
                        break;

                    case 'muybuena':
                        $respuestas["formacion_profesional_calificacionevaluacion_muybuena"]++;
                        break;

                    case 'buena':
                        $respuestas["formacion_profesional_calificacionevaluacion_buena"]++;
                        break;

                    case 'regular':
                        $respuestas["formacion_profesional_calificacionevaluacion_regular"]++;
                        break;

                    case 'mala':
                        $respuestas["formacion_profesional_calificacionevaluacion_mala"]++;
                        break;
                    
                    default:
                        break;
                }
                

                
                switch ($satisfaccion_de_la_formacion_profesional->continuariasestudios) {
                    case 'si':
                        $respuestas["formacion_profesional_continuariasestudios_si"]++;
                        break;

                    case 'no':
                        $respuestas["formacion_profesional_continuariasestudios_no"]++;
                        break;
                    
                    default:
                        break;
                }
                

                      
                
                
            }
             

        }
        return $respuestas;
    }


    public function getData() {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
