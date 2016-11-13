@extends('layouts.encuestas')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center"><h3>Encuesta a Egresados</h3></div>
 
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<p class="text-justify">Como parte de la Planeación Estratégica, Mejora Continua y el Aseguramiento de la Calidad, que se lleva a cabo en la Universidad Tecnológica de la Mixteca (UTM); solicitamos tu amable colaboración para responder esta encuesta, referente al Desempeño Profesional del Egresado de nuestra Institución. Es importante mencionar que tus respuestas serán de gran apoyo para la UTM porque nos permitirá continuar comprometiéndonos a generar capital humano de calidad, al realizar mejoras a nivel institucional, docente y planes de estudio; asimismo, tu información se tratará con absoluta confidencialidad y sólo será utilizada para fines académicos.</p>
						</div>
					</div>
						{!! Form::open(['route' => 'egresados.store', 'class'=>'form-horizontal', 'id'=>'encuestaegresados']) !!}
						<div class="row">
							<div class="col-md-7 col-md-offset-5">
								<div class="form-group">
									<div class="col-md-7">
										<label for="fechaDeRespuesta">Fecha en que se responde la encuesta:</label>
									</div>
								    
								    <div class="col-md-5">
								    	<input type="date" class="form-control" id="fechaderespuesta" name="fechaderespuesta" required="required">
								    </div>
								    
								</div>
							</div>
						</div>
						@include('egresados.primeraparte')
						@include('egresados.segundaparte')
						@include('egresados.terceraparte')
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-lg" value="Enviar Respuestas">

								</div>
								
							</div>
						</div>
						
						{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('javascript')
	<script type="text/javascript">
		empleosG = [];
		
		function toTable(empleo){
			var empleog = [];
			empleog[0] = {	empresaenlaquelaboro:empleo[0],
							puestoinicial:empleo[1],
							puestofinal:empleo[2],
							antiguedad:empleo[3],
							funcionesprincipales:empleo[4]	
							};

			//$("#desarrolloprof").val($("#desarrolloprof").val()+","+JSON.stringify(empleog))
			empleosG.push(empleog);
			var tabla = $("#desarrolloProfesional tbody").prepend("<tr><td class='profesional'>"+empleo[0]+"</td><td class='profesional'>"+empleo[1]+"</td><td class='profesional'>"+empleo[2]+"</td><td class='profesional'>"+empleo[3]+"</td><td class='profesional'>"+empleo[4]+"</td></tr>")
		}
		function agregarEmpleo(){
			var inputs = $("#form1 input"), count = inputs.length;
			var empleo = [];
			$(inputs).each(function(i){
				var temp = $(this);
				if (temp.val() === '') {
					console.log("vacio")
					$(temp).parent().addClass('has-error');
					$(temp).tooltip('show');
					return;
				}
				empleo.push(temp.val())
				if (!--count) {
					$("#modal-id").modal('hide');//ocultar modal
					toTable(empleo);//enviar array a tabla
					$("#form1 input").val("")//limpiar formulario
				}
			});

		}

		function sendEmpleos(){
			$("#desarrolloprof").val(JSON.stringify(empleosG))
			var resp = JSON.stringify(empleosG)
			console.log(resp)
			$.ajax({
				url: 'empleos',
				type: 'GET',
				data: {empleos: resp},
			})
			.done(function(data) {
				console.log("success");
				console.log(data)
			})
			.fail(function(e) {
				console.log("error");
				console.log(e);
			})
			.always(function() {
				console.log("complete");
			});
			
		}

		$("#encuestaegresados").submit(function(e){
			//console.log("Detenido");
		    //e.preventDefault();
		    $("#desarrolloprof").val(JSON.stringify(empleosG))
		  });
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})

	</script>
@stop