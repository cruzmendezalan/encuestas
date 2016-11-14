<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Encuesta a Egresados</title>

  {!! Html::style('assets/css/bootstrap.css') !!}
  {!! Html::style('assets/css/reportes.css') !!}
  <style type="text/css"> 
          thead:before, thead:after { display: none; } 
          tbody:before, tbody:after { display: none; }
          td:{ height: 10px; }
  </style>

  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body >

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">Análisis del resultado de los estudios de seguimiento a egresados</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-condensed">
          <caption class="text-center">RESULTADOS RELEVANTES DE LOS ESTUDIOS DE SEGUIMIENTO A EGRESADOS</caption>
          <thead>
            <tr>
              <th class="text-center">Índices</th>
              <th class="text-center">Absolutos</th>
              <th class="text-center">%</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Egresados considerados en el estudio</td>
              <td class="text-center"><strong>{{ $egresados["numeroDeEncuestados"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["numeroDeEncuestados"] * 100)/$egresados["numeroDeEncuestados"] }}% </strong></td>
            </tr>
            <tr>
              <td>Egresados encuestados</td>
              <td class="text-center"><strong>{{ $egresados["numeroDeEncuestados"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["numeroDeEncuestados"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Género de los egresados</td>
            </tr>
            <tr>
              <td>Femenino</td>
              <td class="text-center"><strong>{{ $egresados["mujeres"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["mujeres"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Masculino</td>
              <td class="text-center"><strong>{{ $egresados["hombre"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["hombre"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Egresados con empleo</td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Tiempo que transcurrio para que los egresados consiguieran su primer empleo</td>
            </tr>
            <tr>
              <td>Menos de 6 meses</td>
              <td class="text-center"><strong>{{ $egresados["menos6meses"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["menos6meses"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>De 6 a 9 meses</td>
              <td class="text-center"><strong>{{ $egresados["mas6menos9"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["mas6menos9"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>De 9 a 12 meses</td>
              <td class="text-center"><strong>{{ $egresados["mas10menos12"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["mas10menos12"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Más de un año</td>
              <td class="text-center"><strong>{{ $egresados["masunanio"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["masunanio"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Aun no cuentan con empleo</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Dificultades para conseguir empleo</td>
            </tr>
            <tr>
              <td>No estar titulados</td>
              <td class="text-center"><strong>{{ $egresados["notitulado"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["notitulado"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>No dominar el inglés u otro idioma</td>
              <td class="text-center"><strong>{{ $egresados["noingles"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["noingles"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Falta de experiencia laboral</td>
              <td class="text-center"><strong>{{ $egresados["nocompetenciaslaborales"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["nocompetenciaslaborales"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Ser egresado de su universidad</td>
              <td class="text-center"><strong>{{ $egresados["seregresadoutm"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["seregresadoutm"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Tipo de organismo donde trabajan</td>
            </tr>
            <tr>
              <td>Empresas u organismos del sector privado</td>
              <td class="text-center"><strong>{{ $egresados["sectorPrivado"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["sectorPrivado"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>En organismos o instituciones Públcias</td>
              <td class="text-center"><strong>{{ $egresados["sectorPublico"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["sectorPublico"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Empresas propias</td>
              <td class="text-center"><strong>{{ $egresados["empresaPropia"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["empresaPropia"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Autoempleados</td>
              <td class="text-center"><strong>{{ $egresados["autoempleados"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["autoempleados"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Otros</td>
              <td class="text-center"><strong>{{ $egresados["otros"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["otros"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Tiempo de dedicación en el empleo</td>
            </tr>
            <tr>
              <td>Tiempo completo</td>
              <td class="text-center"><strong>{{ $egresados["tiempocompleto"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["tiempocompleto"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Medio tiempo</td>
              <td class="text-center"><strong>{{ $egresados["mediotiempo"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["mediotiempo"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Eventual</td>
              <td class="text-center"><strong>{{ $egresados["eventual"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["eventual"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Tipo de formación profesional en el que desempeñan los egresados que trabajan</td>
            </tr>
            <tr>
              <td>En empleos profesionales que requieren de la formación de su carrera</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_carecesconocimientos_si"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_carecesconocimientos_si"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>En empleos profesionales que no requieren de la formación de su carrera</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_carecesconocimientos_no"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_carecesconocimientos_no"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>En empleos que no requieren de un profesion</td>
              <td class="text-center"><strong>0</strong></td>
              <td class="text-center"><stron*100)($egresados["numeroDeEncuestados"]g>0</strong></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Salario de los empleados profesionales</td>
            </tr>
            <tr>
              <td>Menos o igual a 5 mil pesos</td>
              <td class="text-center"><strong>{{ $egresados["trabajo_actual_ingresomensual_menos5"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["trabajo_actual_ingresomensual_menos5"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Más de 5 mil pesos y 10 mil pesos</td>
              <td class="text-center"><strong>{{ $egresados["trabajo_actual_ingresomensual_mas5menos10"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["trabajo_actual_ingresomensual_mas5menos10"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Más de 10 mil pesos y 15 mil pesos</td>
              <td class="text-center"><strong>{{ $egresados["trabajo_actual_ingresomensual_mas10"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["trabajo_actual_ingresomensual_mas10"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Arraigo de los egresados en su zona de influencia o entidad federativa donde estudiaron</td>
            </tr>
            <tr>
              <td>Excelente</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_formacionrecibida_excelente"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_formacionrecibida_excelente"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Buena</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_formacionrecibida_buena"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_formacionrecibida_buena"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Regular</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_formacionrecibida_regular"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_formacionrecibida_regular"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Insatisfactoria</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_formacionrecibida_mala"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_formacionrecibida_mala"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Satisfacción de los egresados en cuanto a la formación recibida por la universidad</td>
            </tr>
            <tr>
              <td>Excelente</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_formacionrecibida_excelente"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_formacionrecibida_excelente"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Buena</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_formacionrecibida_buena"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_formacionrecibida_buena"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Regular</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_formacionrecibida_regular"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_formacionrecibida_regular"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Insatisfactoria</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_formacionrecibida_mala"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_formacionrecibida_mala"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Opinion de los egresados en cuanto al clima universitario (instalaciones, limpieza, respeto a los derechos y obligaciones, equipamiento, laboratorios, bibliotecas, comportamiento de las autoridades, transparencia en el uso de los recursos citados.)</td>
            </tr>
            <tr>
              <td>Excelente</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_calificacioninstalaciones_excelente"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_calificacioninstalaciones_excelente"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Buena</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_calificacioninstalaciones_buena"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_calificacioninstalaciones_buena"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Regular</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_calificacioninstalaciones_regular"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_calificacioninstalaciones_regular"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td>Insatisfactoria</td>
              <td class="text-center"><strong>{{ $egresados["formacion_profesional_calificacioninstalaciones_mala"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["formacion_profesional_calificacioninstalaciones_mala"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td class="text-center bg-info">Egresados titulados</td>
              <td class="text-center"><strong>{{ $egresados["numeroDeEncuestados"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["numeroDeEncuestados"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
            <tr>
              <td class="text-center bg-info">Egresados no titulados</td>
              <td class="text-center"><strong>{{ $egresados["notitulado"] }}</strong></td>
              <td class="text-center"><strong>{{ ($egresados["notitulado"]*100)/$egresados["numeroDeEncuestados"] }}</strong></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  {{-- {!! Html::script('assets/js/jquery-2.2.3.min.js') !!} --}}
  {{-- {!! Html::script('assets/js/bootstrap.min.js') !!} --}}
</body>
</html>
