@extends('layouts.layout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Encuesta a agresados</div>
 
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<p class="text-justify">Como parte de la Planeación Estratégica, Mejora Continua y el Aseguramiento de la Calidad, que se lleva a cabo en la Universidad Tecnológica de la Mixteca (UTM); solicitamos tu amable colaboración para responder esta encuesta, referente al Desempeño Profesional del Egresado de nuestra Institución. Es importante mencionar que tus respuestas serán de gran apoyo para la UTM porque nos permitirá continuar comprometiéndonos a generar capital humano de calidad, al realizar mejoras a nivel institucional, docente y planes de estudio; asimismo, tu información se tratará con absoluta confidencialidad y sólo será utilizada para fines académicos.</p>
						</div>
					</div>
						<form class="form-horizontal">
						<div class="row">
							<div class="col-md-7 col-md-offset-5">
								<div class="form-group">
									<div class="col-md-7">
										<label for="fechaDeRespuesta">Fecha en que se responde la encuesta:</label>
									</div>
								    
								    <div class="col-md-5">
								    	<input type="date" class="form-control" id="fechaderespuesta" name="fechaderespuesta">
								    </div>
								    
								</div>
							</div>
						</div>
						@include('egresados.primeraparte')
						<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
						@include('egresados.segundaparte')
						@include('egresados.terceraparte')
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection