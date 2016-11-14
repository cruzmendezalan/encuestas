@extends('layouts.encuestas')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center"><h3>Encuesta a Empleadores</h3></div>
 
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<p class="text-justify">Como parte de la Planeación Estratégica, Mejora Continua y el Aseguramiento de la Calidad, que se lleva a cabo en la Universidad Tecnológica de la Mixteca (UTM); solicitamos su amable colaboración para responder esta encuesta, referente al Desempeño Profesional del Egresado de nuestra Institución, que actualmente se encuentra adscrito a su empresa. Es importante mencionar que sus respuestas serán de gran apoyo para la UTM porque nos permitirá realizar mejoras a nivel institucional, continuando con el compromiso de generar capital humano de calidad, tanto para usted como para las demás empresas y sociedad en general; asimismo, su información se tratará con absoluta confidencialidad y sólo será utilizada para fines académicos.</p>
						</div>
					</div>
						{!! Form::open(['route' => 'empleadores.store', 'class'=>'form-horizontal', 'id'=>'encuestaempleadores']) !!}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-2">
										<label for="fechaDeRespuesta">Empresa:</label>
									</div>
								    
								    <div class="col-md-10">
								    	<input type="text" class="form-control" name="empresa">
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
										<input type="text" name="jefe_inmediato" class="form-control">
									</div>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-3">
										<label for="genero">Puesto: </label>
									</div>
									<div class="col-md-9">
										<input type="text" name="puesto" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="carrera" class="control-label">Nombre de la Licenciatura o Posgrado del Egresado:</label>
									</div>
									<div class="col-md-6">
										<select name="carrera" class="form-control" required>
											<option disabled selected value> -- selecciona una opción -- </option>
											<option value="computacion">Ingeniería en Computacion</option>
											<option value="disenio">Ingeniería en Diseño</option>
											<option value="electronica">Ingeniería en Electrónica</option>
											<option value="alimentos">Ingeniería en Alimentos</option>
											<option value="industrial">Ingeniería Industrial</option>
											<option value="fisica">Ingeniería en Física Aplicada</option>
											<option value="empresariales">Licenciatura en Ciencias Empresariales</option>
											<option value="matematicas">Licenciatura en Matemáticas Aplicadas</option>
										</select>
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
										<input type="text" name="puesto_egresado" class="form-control">
									</div>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-5">
										<label for="genero">Antigüedad en el puesto: </label>
									</div>
									<div class="col-md-7">
										<input type="text" name="antiguedad" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="conocimientos" class="control-label text-justify">¿Cuál es el grado de conocimientos que el egresado demuestra o demostró en sus funciones, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="conocimientos" class="form-control">
											<option disabled selected value> -- selecciona una opción -- </option>
											<option value="exelente">Excelente</option>
											<option value="sobresaliente">Sobresaliente</option>
											<option value="aceptable">Aceptable</option>
											<option value="insuficiente">Insuficiente</option>
											<option value="deficiente">Deficiente</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="carece_conocimientos" class="control-label text-justify">¿El egresado carece o careció de algún(os) conocimiento(s) básico(s) para realizar sus actividades, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="carece_conocimientos" class="form-control">
											<option disabled selected value> -- selecciona una opción -- </option>
											<option value="si">Si</option>
											<option value="no">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="requiere_conocimientos" class="control-label text-justify">¿El egresado requiere o requirió actualizar sus conocimientos con base a las necesidades de su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="requiere_conocimientos" class="form-control">
											<option disabled selected value> -- selecciona una opción -- </option>
											<option value="si">Si</option>
											<option value="no">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<div class="col-md-6">
									<label for="habilidades" class="control-label text-justify">Subraye máximo cinco habilidades que considere importantes deba desarrollar el egresado para realizar sus actividades:</label>
								</div>
								<div class="col-md-6">
									<select name="habilidades" class="form-control" multiple="multiple">
										<option disabled selected value> -- selecciona una opción -- </option>
										<option value="comunicar">Comunicar</option>
										<option value="dirigir">Dirigir</option>
										<option value="trabajar_en_equipo">Trabajar en equipo</option>
										<option value="identificar_resolver_problemas">Identificar y resolver problemas</option>
										<option value="analizar">Analizar</option>
										<option value="negociar">Negociar</option>
										<option value="aprender">Aprender</option>
										<option value="ser creativo">Ser creativo</option>
										<option value="proponer">Proponer</option>
										<option value="categorizar">Categorizar</option>
										<option value="describir">Describir</option>
										<option value="evaluar">Evaluar</option>
										<option value="procesar">Procesar</option>
										<option value="escuchar">Escuchar</option>
										<option value="expresar">Expresar</option>
										<option value="resolver_conflictos">Resolver conflictos</option>
										<option value="solicitar">Solicitar</option>
										<option value="decidir">Decidir</option>
										<option value="interpretar">Interpretar</option>
										<option value="rebatir">Rebatir</option>
										<option value="innovar">Innovar</option>
										<option value="otras">Otras</option>

									</select>
								</div>
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="no_habilidades" class="control-label text-justify">Considerando las habilidades seleccionadas en el punto 4, ¿qué habilidades no demuestra o demostró el egresado para realizar sus actividades, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="no_habilidades" class="form-control" multiple="multiple">
											<option disabled selected value> -- selecciona una opción -- </option>
										<option value="comunicar">Comunicar</option>
										<option value="dirigir">Dirigir</option>
										<option value="trabajar_en_equipo">Trabajar en equipo</option>
										<option value="identificar_resolver_problemas">Identificar y resolver problemas</option>
										<option value="analizar">Analizar</option>
										<option value="negociar">Negociar</option>
										<option value="aprender">Aprender</option>
										<option value="ser creativo">Ser creativo</option>
										<option value="proponer">Proponer</option>
										<option value="categorizar">Categorizar</option>
										<option value="describir">Describir</option>
										<option value="evaluar">Evaluar</option>
										<option value="procesar">Procesar</option>
										<option value="escuchar">Escuchar</option>
										<option value="expresar">Expresar</option>
										<option value="resolver_conflictos">Resolver conflictos</option>
										<option value="solicitar">Solicitar</option>
										<option value="decidir">Decidir</option>
										<option value="interpretar">Interpretar</option>
										<option value="rebatir">Rebatir</option>
										<option value="innovar">Innovar</option>
										<option value="otras">Otras</option>

									</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="carece_habilidades" class="control-label text-justify">¿El egresado carece o careció del dominio de alguna(s) área(s) de conocimiento básica(s) para realizar sus actividades, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="carece_habilidades" class="form-control">
											<option disabled selected value> -- selecciona una opción -- </option>
											<option value="si">Si</option>
											<option value="no">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<div class="col-md-6">
									<label for="habilidades_importantes" class="control-label text-justify">Selecciona máximo cinco habilidades importantes que requieres o requerías dominar al momento de ejercer tu profesión por primera vez y que no fueron desarrolladas durante tu formación profesional.:</label>
								</div>
								<div class="col-md-6">
									<select name="habilidades_importantes" class="form-control" multiple="multiple">
										<option disabled selected value> -- selecciona una opción -- </option>
										<option value="comunicar">Comunicar</option>
										<option value="dirigir">Dirigir</option>
										<option value="trabajar_en_equipo">Trabajar en equipo</option>
										<option value="identificar_resolver_problemas">Identificar y resolver problemas</option>
										<option value="analizar">Analizar</option>
										<option value="negociar">Negociar</option>
										<option value="aprender">Aprender</option>
										<option value="ser creativo">Ser creativo</option>
										<option value="proponer">Proponer</option>
										<option value="categorizar">Categorizar</option>
										<option value="describir">Describir</option>
										<option value="evaluar">Evaluar</option>
										<option value="procesar">Procesar</option>
										<option value="escuchar">Escuchar</option>
										<option value="expresar">Expresar</option>
										<option value="resolver_conflictos">Resolver conflictos</option>
										<option value="solicitar">Solicitar</option>
										<option value="decidir">Decidir</option>
										<option value="interpretar">Interpretar</option>
										<option value="rebatir">Rebatir</option>
										<option value="innovar">Innovar</option>
										<option value="otras">Otras</option>

									</select>
								</div>
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="habilidades_no_demostradas" class="control-label text-justify">Considerando los valores seleccionados en el punto 7, ¿qué valores no demuestra o demostró el egresado para realizar sus actividades, al momento de ingresar a su empresa?</label>
									</div>
									<div class="col-md-6">
										<select name="habilidades_no_demostradas" class="form-control" multiple="multiple">
											<option disabled selected value> -- selecciona una opción -- </option>
										<option value="comunicar">Comunicar</option>
										<option value="dirigir">Dirigir</option>
										<option value="trabajar_en_equipo">Trabajar en equipo</option>
										<option value="identificar_resolver_problemas">Identificar y resolver problemas</option>
										<option value="analizar">Analizar</option>
										<option value="negociar">Negociar</option>
										<option value="aprender">Aprender</option>
										<option value="ser creativo">Ser creativo</option>
										<option value="proponer">Proponer</option>
										<option value="categorizar">Categorizar</option>
										<option value="describir">Describir</option>
										<option value="evaluar">Evaluar</option>
										<option value="procesar">Procesar</option>
										<option value="escuchar">Escuchar</option>
										<option value="expresar">Expresar</option>
										<option value="resolver_conflictos">Resolver conflictos</option>
										<option value="solicitar">Solicitar</option>
										<option value="decidir">Decidir</option>
										<option value="interpretar">Interpretar</option>
										<option value="rebatir">Rebatir</option>
										<option value="innovar">Innovar</option>
										<option value="otras">Otras</option>

									</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="factores_contratar" class="control-label text-justify">¿Qué factor o factores consideró al momento de contratar al egresado?</label>
									</div>
									<div class="col-md-6">
										<select name="factores_contratar" class="form-control">
											<option disabled selected value> -- selecciona una opción -- </option>
											<option value="no_competencias">No tener competencias laborales</option>
											<option value="ser_utm">Ser egresado de la UTM</option>
											<option value="no_titulado">No estar titulado</option>
											<option value="no_ingles">No dominar un idioma extranjero </option>
											<option value="no_seleccion">No acreditar un examen de selección</option>
											<option value="no_socio_comunicativas">Inhabilidades Socio-comunicativas</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="factores_para_contratar" class="control-label text-justify">Indique el valor que como empleador le da a los siguientes factores, al momento de contratar a un egresado.</label>
									</div>
									<div class="col-md-6">
										<select name="factores_para_contratar" class="form-control">
											<option disabled selected value> -- selecciona una opción -- </option>
											<option value="area">Área o campo de estudio</option>
											<option value="titulo">Titulo profesional</option>
											<option value="experiencia">Experiencia laboral</option>
											<option value="idiomas">Conocimiento de idiomas extranjeros</option>
											<option value="recomendaciones">Recomendaciones/referencias</option>
											<option value="imagen_universidad">Imagen de la Institución de Estudios Superiores</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-6">
										<label for="continuar_contratando" class="control-label text-justify">¿Continuaría contratado egresados de la Universidad Tecnológica de la Mixteca?</label>
									</div>
									<div class="col-md-6">
										<select name="continuar_contratando" class="form-control">
											<option disabled selected value> -- selecciona una opción -- </option>
											<option value="si">Si</option>
											<option value="no">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="recomendaciones" class="control-label text-justify">¿Qué recomendarías mejorar en cada una de las opciones que calificaste como regular o mala?</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<textarea name="recomendaciones" class="form-control"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-lg" value="Enviar Respuestas">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection