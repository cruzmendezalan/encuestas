<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {!! Html::style('assets/css/bootstrap.css') !!}
        <title>Sistema de encuestas UTM</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="col-md-12 text-center">
                <img src="img/logo.png" class="img-responsive center-block">
            </div>
            <div class="col-md-12 text-center">
              <a type="button" href="egresados" class="btn btn-primary">Encuesta a egresados</a>
              <a type="button" class="btn btn-default" disabled>Encuesta a empleadores</a>
            </div>
        </div>
      {!! Html::script('assets/js/jquery-2.2.3.min.js') !!}
      {!! Html::script('assets/js/bootstrap.min.js') !!}
    </body>
</html>
