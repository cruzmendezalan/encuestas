<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Encuesta a Egresados</title>

	{!! Html::style('assets/css/bootstrap.css') !!}
	{!! Html::style('assets/css/encuestas.css') !!}

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar">
		<div class="container-fluid" id="main">
			<div class="row">
			 	<div class="span4"></div>
			 	<div class="span4"><img class="img-responsive center-block" src="img/utm_logo.png"></div>
				<div class="span4"></div>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	{!! Html::script('assets/js/jquery-2.2.3.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	{!! Html::script('assets/js/smoothstate.js') !!}
	@yield('javascript')
</body>
</html>