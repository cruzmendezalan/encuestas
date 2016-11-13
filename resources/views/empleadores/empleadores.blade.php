@extends('layouts.encuestas')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Encuesta a empleadores</div>
 
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<p class="text-justify">Como parte de la Planeación Estratégica, Mejora Continua y el Aseguramiento de la Calidad, que se lleva a cabo en la Universidad Tecnológica de la Mixteca (UTM); solicitamos su amable colaboración para responder esta encuesta, referente al Desempeño Profesional del Egresado de nuestra Institución, que actualmente se encuentra adscrito a su empresa. Es importante mencionar que sus respuestas serán de gran apoyo para la UTM porque nos permitirá realizar mejoras a nivel institucional, continuando con el compromiso de generar capital humano de calidad, tanto para usted como para las demás empresas y sociedad en general; asimismo, su información se tratará con absoluta confidencialidad y sólo será utilizada para fines académicos.</p>
						</div>
					</div>
						<form class="form-horizontal">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-2">
										<label for="fechaDeRespuesta">Empresa:</label>
									</div>
								    
								    <div class="col-md-10">
								    	<input type="text" class="form-control" id="fechaDeRespuesta">
								    </div>
								    
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-6">
										<label for="nombre" class="control-label text-justify">Nombre de jefe inmediato:</label>
									</div>
									<div class="col-md-6">
										<input type="text" name="nombre" class="form-control">
									</div>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-3">
										<label for="genero">Puesto: </label>
									</div>
									<div class="col-md-9">
										<input type="text" name="nombre" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="nombre" class="control-label text-justify">Nombre de la Licenciatura o Posgrado del Egresado:</label>
									</div>
									<div class="col-md-6">
										<input type="text" name="nombre" class="form-control">
									</div>
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-5">
										<label for="nombre" class="control-label text-justify">Puesto del egresado:</label>
									</div>
									<div class="col-md-7">
										<input type="text" name="nombre" class="form-control">
									</div>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-5">
										<label for="genero">Antigüedad en el puesto: </label>
									</div>
									<div class="col-md-7">
										<input type="text" name="nombre" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label text-justify">¿Cuál es el grado de conocimientos que el egresado demuestra o demostró en sus funciones, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="ftitulacion" class="form-control">
											<option value="public">Excelente</option>
											<option value="privada">Sobresaliente</option>
											<option value="propia">Aceptable</option>
											<option value="propia">Insuficiente</option>
											<option value="propia">Deficiente</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label text-justify">¿El egresado carece o careció de algún(os) conocimiento(s) básico(s) para realizar sus actividades, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="ftitulacion" class="form-control">
											<option value="public">Si</option>
											<option value="privada">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label text-justify">¿El egresado requiere o requirió actualizar sus conocimientos con base a las necesidades de su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="ftitulacion" class="form-control">
											<option value="public">Si</option>
											<option value="privada">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="lorigen" class="control-label text-justify">Subraye máximo cinco habilidades que considere importantes deba desarrollar el egresado para realizar sus actividades:</label>
								</div>
								<div class="col-md-6">
									<select name="ftitulacion" class="form-control" multiple="multiple">
										<option value="completo">Comunicar</option>
										<option value="medio">Dirigir</option>
										<option value="medio">Trabajar en equipo</option>
										<option value="medio">Identificar y resolver problemas</option>
										<option value="medio">Analizar</option>
										<option value="medio">Negociar</option>
										<option value="medio">Aprender</option>
										<option value="medio">Ser creativo</option>
										<option value="medio">Proponer</option>
										<option value="medio">Categorizar</option>
										<option value="medio">Describir</option>
										<option value="medio">Evaluar</option>
										<option value="medio">Procesar</option>
										<option value="medio">Escuchar</option>
										<option value="medio">Expresar</option>
										<option value="medio">Resolver conflictos</option>
										<option value="medio">Solicitar</option>
										<option value="medio">Decidir</option>
										<option value="medio">Interpretar</option>
										<option value="medio">Rebatir</option>
										<option value="medio">Innovar</option>
										<option value="medio">Otras</option>

									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label text-justify">Considerando las habilidades seleccionadas en el punto 4, ¿qué habilidades no demuestra o demostró el egresado para realizar sus actividades, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="ftitulacion" class="form-control">
											<option value="public">Si</option>
											<option value="privada">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label text-justify">¿El egresado carece o careció del dominio de alguna(s) área(s) de conocimiento básica(s) para realizar sus actividades, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="ftitulacion" class="form-control">
											<option value="public">Si</option>
											<option value="privada">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="lorigen" class="control-label text-justify">Selecciona máximo cinco habilidades importantes que requieres o requerías dominar al momento de ejercer tu profesión por primera vez y que no fueron desarrolladas durante tu formación profesional.:</label>
								</div>
								<div class="col-md-6">
									<select name="ftitulacion" class="form-control" multiple="multiple">
										<option value="completo">Comunicar</option>
										<option value="medio">Dirigir</option>
										<option value="medio">Trabajar en equipo</option>
										<option value="medio">Identificar y resolver problemas</option>
										<option value="medio">Analizar</option>
										<option value="medio">Negociar</option>
										<option value="medio">Aprender</option>
										<option value="medio">Ser creativo</option>
										<option value="medio">Proponer</option>
										<option value="medio">Categorizar</option>
										<option value="medio">Describir</option>
										<option value="medio">Evaluar</option>
										<option value="medio">Procesar</option>
										<option value="medio">Escuchar</option>
										<option value="medio">Expresar</option>
										<option value="medio">Resolver conflictos</option>
										<option value="medio">Solicitar</option>
										<option value="medio">Decidir</option>
										<option value="medio">Interpretar</option>
										<option value="medio">Rebatir</option>
										<option value="medio">Innovar</option>
										<option value="medio">Otras</option>

									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label text-justify">Considerando los valores seleccionados en el punto 7, ¿qué valores no demuestra o demostró el egresado para realizar sus actividades, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="ftitulacion" class="form-control">
											<option value="public">Si</option>
											<option value="privada">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label text-justify">¿Qué factor o factores consideró al momento de contratar al egresado?</label>
									</div>
									<div class="col-md-6">
										<select name="ftitulacion" class="form-control">
											<option value="completo">No tener competencias laborales</option>
											<option value="medio">Ser egresado de la UTM</option>
											<option value="horas">No estar titulado</option>
											<option value="horas">No dominar un idioma extranjero </option>
											<option value="horas">No acreditar un examen de selección</option>
											<option value="horas">Inhabilidades Socio-comunicativas</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label text-justify">Indique el valor que como empleador le da a los siguientes factores, al momento de contratar a un egresado.</label>
									</div>
									<div class="col-md-6">
										<select name="ftitulacion" class="form-control">
											<option value="completo">Área o campo de estudio</option>
											<option value="medio">Titulo profesional</option>
											<option value="horas">Experiencia laboral</option>
											<option value="horas">Conocimiento de idiomas extranjeros</option>
											<option value="horas">Recomendaciones/referencias</option>
											<option value="horas">Imagen de la Institución de Estudios Superiores</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label text-justify">¿Continuaría contratado egresados de la Universidad Tecnológica de la Mixteca?</label>
									</div>
									<div class="col-md-6">
										<select name="ftitulacion" class="form-control">
											<option value="public">Si</option>
											<option value="privada">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="lorigen" class="control-label text-justify">¿Qué recomendarías mejorar en cada una de las opciones que calificaste como regular o mala?</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<textarea name="" class="form-control"></textarea>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection