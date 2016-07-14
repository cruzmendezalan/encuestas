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
    <div class="row" id="header">
      <div class="col-md-12">
        <h3 class="text-center">Análisis del resultado de los estudios de seguimiento a egresados</h3>
      </div>
    </div>
    <div class="row" id="body">
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
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Egresados encuestados</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Género de los egresados</td>
            </tr>
            <tr>
              <td>Femenino</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Masculino</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Egresados con empleo</td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Tiempo que transcurrio para que los egresados consiguieran su primer empleo</td>
            </tr>
            <tr>
              <td>Menos de 6 meses</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>De 6 a 9 meses</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>De 9 a 12 meses</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Más de un año</td>
              <td></td>
              <td></td>
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
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>No dominar el inglés u otro idioma</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Falta de experiencia laboral</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Ser egresado de su universidad</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Tipo de organismo donde trabajan</td>
            </tr>
            <tr>
              <td>Empresas u organismos del sector privado</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>En organismos o instituciones Públcias</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Empresas propias</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Autoempleados</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Otros</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Tiempo de dedicación en el empleo</td>
            </tr>
            <tr>
              <td>Tiempo completo</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Medio tiempo</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Eventual</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Tipo de formación profesional en el que desempeñan los egresados que trabajan</td>
            </tr>
            <tr>
              <td>En empleos profesionales que requieren de la formación de su carrera</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>En empleos profesionales que no requieren de la formación de su carrera</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>En empleos que no requieren de un profesion</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Salario de los empleados profesionales</td>
            </tr>
            <tr>
              <td>Menos o igual a 5 mil pesos</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Más de 5 mil pesos y 10 mil pesos</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Más de 10 mil pesos y 15 mil pesos</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Más de 15 mil pesos</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Arraigo de los egresados en su zona de influencia o entidad federativa donde estudiaron</td>
            </tr>
            <tr>
              <td>Excelente</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Buena</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Regular</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Insatisfactoria</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Satisfacción de los egresados en cuanto a la formación recibida por la universidad</td>
            </tr>
            <tr>
              <td>Excelente</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Buena</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Regular</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Insatisfactoria</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" class="text-center bg-info">Opinion de los egresados en cuanto al clima universitario (instalaciones, limpieza, respeto a los derechos y obligaciones, equipamiento, laboratorios, bibliotecas, comportamiento de las autoridades, transparencia en el uso de los recursos citados.)</td>
            </tr>
            <tr>
              <td>Excelente</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Buena</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Regular</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Insatisfactoria</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center bg-info">Egresados titulados</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center bg-info">Egresados no titulados</td>
              <td></td>
              <td></td>
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
