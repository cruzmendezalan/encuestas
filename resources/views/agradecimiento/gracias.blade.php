<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Encuesta a Egresados</title>

	{!! Html::style('assets/css/bootstrap.css') !!}

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body onload="winClose();">

	<div class="row text-center">
	  <div class="col-sm-6 col-md-12">
	    <div class="thumbnail">
	      <img src="img/agradecimiento.gif" alt="..." class="img-responsive center-block">
	      <div class="caption">
	        <h3>Gracias por responder la encuesta</h3>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Scripts -->
	{!! Html::script('assets/js/jquery-2.2.3.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	<script type="text/javascript">
		function winClose() {
		    window.setTimeout("window.close();",5000)
		}
	</script>
</body>
</html>
