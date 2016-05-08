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
						<div class="row">
							<div class="col-md-12">
								<small>
									<strong>PARTE I Instrucciones:</strong> Contestar todos los campos de Identificación del Egresado, Estudios Realizados en la UTM y Datos del Trabajo Actual; dejando sólo en blanco aquellos que no apliquen contigo.
								</small>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<div class="col-md-2">
										<label for="nombre" class="control-label">Nombre:</label>
									</div>
									<div class="col-md-10">
										<input type="text" name="nombre" class="form-control">
									</div>
								</div>
								
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="col-md-6">
										<label for="genero">Genero: </label>
									</div>
									<div class="col-md-6">
										<select name="genero" class="form-control">
											<option value="mujer">Mujer</option>
											<option value="hombre">Hombre</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-5">
										<label for="fnac" class="control-label">Fecha de nacimiento:</label>
									</div>
									<div class="col-md-7">
										<input type="date" name="fnac" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-3">
										<label for="nacionalidad" class="control-label">Nacionalidad:</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="nacionalidad" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-5">
										<label for="lorigen" class="control-label">Lugar de origen:</label>
									</div>
									<div class="col-md-7">
										<input type="text" name="lorigen" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-3">
										<label for="ltrabajo" class="control-label">Lugar de trabajo:</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="ltrabajo" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-5">
										<label for="lorigen" class="control-label">Télefono de contacto:</label>
									</div>
									<div class="col-md-7">
										<input type="text" name="tcontacto" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-3">
										<label for="ltrabajo" class="control-label">Correo electrónico:</label>
									</div>
									<div class="col-md-9">
										<input type="email" name="correoelectronico" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-5">
										<label for="lorigen" class="control-label">Carrera:</label>
									</div>
									<div class="col-md-7">
										<input type="text" name="carrera" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-3">
										<label for="ftitulacion" class="control-label">Forma de titulación:</label>
									</div>
									<div class="col-md-9">
										<select name="ftitulacion" class="form-control">
											<option value="tesis">Tesis</option>
											<option value="cenaval">Ceneval</option>
											<option value="notitulado">No titulado</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-6">
										<label for="lorigen" class="control-label">Fecha de inicio de estudios:</label>
									</div>
									<div class="col-md-6">
										<input type="date" name="finiestudios" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-6">
										<label for="ltrabajo" class="control-label">Fecha de fin de estudios:</label>
									</div>
									<div class="col-md-6">
										<input type="date" name="lorigen" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<div class="col-md-4">
										<label for="maestria" class="control-label">Maestría en:</label>
									</div>
									<div class="col-md-8">
										<input type="text" name="maestria" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="col-md-6">
										<label for="maestriatitulo" class="control-label">Titulado:</label>
									</div>
									<div class="col-md-6">
										<select name="maestriatitulo" class="form-control">
											<option value="si">Si</option>
											<option value="no">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<div class="col-md-4">
										<label for="doctorado" class="control-label">Doctorado en:</label>
									</div>
									<div class="col-md-8">
										<input type="text" name="doctorado" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="col-md-6">
										<label for="doctoradotitulo" class="control-label">Titulado:</label>
									</div>
									<div class="col-md-6">
										<select name="doctoradotitulo" class="form-control">
											<option value="si">Si</option>
											<option value="no">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<div class="col-md-4">
										<label for="nempresa" class="control-label">Nombre de la empresa:</label>
									</div>
									<div class="col-md-8">
										<input type="text" name="nempresa" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="col-md-6">
										<label for="tempresa" class="control-label">Tipo:</label>
									</div>
									<div class="col-md-6">
										<select name="tempresa" class="form-control">
											<option value="public">Pública</option>
											<option value="privada">Privada</option>
											<option value="propia">Propio</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<div class="col-md-4">
										<label for="fingreso" class="control-label">Fecha de ingreso:</label>
									</div>
									<div class="col-md-8">
										<input type="date" name="fingreso" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="col-md-6">
										<label for="pactual" class="control-label">Puesto actual:</label>
									</div>
									<div class="col-md-6">
										<input type="text" name="pactual" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<div class="col-md-4">
										<label for="pinicial" class="control-label">Puesto inicial:</label>
									</div>
									<div class="col-md-8">
										<input type="text" name="pinicial" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="col-md-6">
										<label for="thorario" class="control-label">Horario laborable:</label>
									</div>
									<div class="col-md-6">
										<select name="thorario" class="form-control">
											<option value="completo">Completo</option>
											<option value="medio">Medio</option>
											<option value="horas">Horas</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<div class="col-md-4">
										<label for="tcontrato" class="control-label">Tipo de contrato:</label>
									</div>
									<div class="col-md-8">
										<input type="date" name="tcontrato" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="col-md-6">
										<label for="tempresa" class="control-label">Télefono de la empresa:</label>
									</div>
									<div class="col-md-6">
										<input type="text" name="tempresa" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-4">
										<label for="imensual" class="control-label">Ingreso mensual:</label>
									</div>
									<div class="col-md-8">
										<select name="imensual" class="form-control">
											<option value="completo"> < $5000.00 </option>
											<option value="medio"> De $5001.00 a $10,000.00 </option>
											<option value="horas"> > $10,000.00 </option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-4">
										<label for="alaborales" class="control-label">Sus actividades laborales:</label>
									</div>
									<div class="col-md-8">
										<select name="ftitulacion" class="form-control">
											<option value="completo"> Requieren de la formación de mi carrera.</option>
											<option value="medio"> No requieren de la formación de mi carrera.</option>
											<option value="horas"> No requieren de una profesión. </option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<small>
									<strong>PARTE II Instrucciones:</strong> Indicar las empresas en que se ha desarrollado profesionalmente, comenzando por la menos antigua hasta la más antigua.Indicar las tres funciones principales que desarrolló en cada empresa.
								</small>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<td>Empresa en la que laboró</td>
											<td>Puesto en el que inicio</td>
											<td>Puesto en el que terminó</td>
											<td>Antigüedad(Años meses)</td>
											<td>Funciones principales (Sólo tres)</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
										</tr>
										<tr>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
										</tr>
										<tr>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
											<td><input type="text" class="form-control"></input></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<small>
									<strong>PARTE III Instrucciones:</strong> Contestar todos los campos de Satisfacción de la Formación Profesional y Recomendaciones del Egresado, dejando sólo en blanco aquellos que no apliquen contigo.
								</small>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="tiempoprimerempleo" class="control-label">¿Qué tiempo transcurrió para que consiguieras tu primer empleo, después de haber egresado?:</label>
								</div>
								<div class="col-md-6">
									<select name="tiempoprimerempleo" class="form-control">
										<option value="completo"> < 6 meses</option>
										<option value="medio"> De 6 a 9 meses</option>
										<option value="horas"> De 10 a 12 meses </option>
										<option value="horas"> > a 1 año </option>
										<option value="horas"> No cuento com empleo aún </option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="difucultadprimerempleo" class="control-label">¿Cuáles factores dificultaron o han dificultado tu contratación, al momento de conseguir tu primer empleo?:</label>
								</div>
								<div class="col-md-6">
									<select name="difucultadprimerempleo" class="form-control">
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
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="formacionrecibida" class="control-label">¿Cómo calificas, en general, la formación recibida por la UTM al momento de ejercer tu profesión por primera vez?:</label>
								</div>
								<div class="col-md-6">
									<select name="formacionrecibida" class="form-control">
										<option value="completo">Excelente</option>
										<option value="medio">Muy buena</option>
										<option value="horas">Buena</option>
										<option value="horas">Regular</option>
										<option value="horas">Mala</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="carecesconocimientos" class="control-label">¿Consideras que careces o carecías de algún(os) conocimiento(s) básico(s), al momento de ejercer tu profesión por primera vez, y que no fue(ron) desarrollado(s) durante tu formación profesional?:</label>
								</div>
								<div class="col-md-6">
									<select name="carecesconocimientos" class="form-control">
										<option value="completo">Si</option>
										<option value="medio">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="habilidades" class="control-label">Selecciona máximo cinco habilidades importantes que requieres o requerías dominar al momento de ejercer tu profesión por primera vez y que no fueron desarrolladas durante tu formación profesional.</label>
								</div>
								<div class="col-md-6">
									<select name="habilidades" class="form-control" multiple="multiple">
										<option value="comunicar">Comunicar</option>
										<option value="dirigir">Dirigir</option>
										<option value="trabajar">Trabajar en equipo</option>
										<option value="identificaryresolverproblemas">Identificar y resolver problemas</option>
										<option value="analizar">Analizar</option>
										<option value="negociar">Negociar</option>
										<option value="aprender">Aprender</option>
										<option value="ser">Ser creativo</option>
										<option value="proponer">Proponer</option>
										<option value="categorizar">Categorizar</option>
										<option value="describir">Describir</option>
										<option value="evaluar">Evaluar</option>
										<option value="procesar">Procesar</option>
										<option value="escuchar">Escuchar</option>
										<option value="expresar">Expresar</option>
										<option value="resolver">Resolver conflictos</option>
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
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="carecesareasdeconocimiento" class="control-label">¿Consideras que careces o carecías del dominio de alguna(s) área(s) de conocimiento básica(s) (sistemas, publicidad,investigación, manufactura, etc.), al momento de ejercer tu profesión por primera vez, y que no fue(ron) desarrollada(s) durante tu formación profesional?:</label>
								</div>
								<div class="col-md-6">
									<select name="carecesareasdeconocimiento" class="form-control">
										<option value="completo">Si</option>
										<option value="medio">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="valores" class="control-label">Selecciona máximo cinco valores o actitudes importantes que requieres o requerías tener al momento de ejercer tu profesión por primera vez y que no fueron fomentados durante tu formación profesional.</label>
								</div>
								<div class="col-md-6">
									<select name="valores" class="form-control">
										<option value="respeto">Respeto</option>
										<option value="honestidad">Honestidad</option>
										<option value="lealtad">Lealtad</option>
										<option value="discrecionalidad">Discrecionalidad</option>
										<option value="responsabilidad">Responsabilidad</option>
										<option value="tolerancia">Tolerancia</option>
										<option value="respeto">Respeto a la naturaleza</option>
										<option value="imparcialidad">Imparcialidad</option>
										<option value="solidaridad">Solidaridad</option>
										<option value="integridad">Integridad</option>
										<option value="diciplina">Diciplina</option>
										<option value="eficiencia">Eficiencia</option>
										<option value="perseverancia">Perseverancia</option>
										<option value="puntualidad">Puntualidad</option>
										<option value="calidad">Calidad en el trabajo</option>
										<option value="limpieza">Limpieza</option>
										<option value="disponibilidad">Disponibilidad</option>
										<option value="profesionabilidad">Profesionabilidad</option>
										<option value="empatia">Empatía</option>
										<option value="honradez">Honradez</option>
										<option value="justicia">Justicia</option>
										<option value="otras">Otras</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="calificacioninstalaciones" class="control-label">¿Cómo calificas las instalaciones (aulas, biblioteca, salas de cómputo, laboratorios, otros) de la UTM, durante tu formación profesional y que repercutieron al momento de ejercer tu profesión por primera vez?:</label>
								</div>
								<div class="col-md-6">
									<select name="calificacioninstalaciones" class="form-control">
										<option value="completo">Excelentes</option>
										<option value="medio">Muy buenas</option>
										<option value="horas">Buenas</option>
										<option value="horas">Regulares</option>
										<option value="horas">Malas</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="calificacionserviciosescolares" class="control-label">¿Cómo calificas los servicios (escolares y administrativos) de la UTM, durante tu formación profesional y que repercutieron al momento de ejercer tu profesión por primera vez?:</label>
								</div>
								<div class="col-md-6">
									<select name="serviciosescolares" class="form-control">
										<option value="completo">Excelentes</option>
										<option value="medio">Muy buenas</option>
										<option value="horas">Buenas</option>
										<option value="horas">Regulares</option>
										<option value="horas">Malas</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="calificacionequipos" class="control-label">¿Cómo calificas los equipos, instrumentos, maquinaria, herramientas y software de la UTM, durante tu formación profesional y que repercutieron al momento de ejercer tu profesión por primera vez?</label>
								</div>
								<div class="col-md-6">
									<select name="calificacionequipos" class="form-control">
										<option value="completo">Excelentes</option>
										<option value="medio">Muy buenas</option>
										<option value="horas">Buenas</option>
										<option value="horas">Regulares</option>
										<option value="horas">Malas</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="calificacionlimpieza" class="control-label">¿Cómo calificas, en general, la limpieza de la infraestructura de la UTM, durante tu formación profesional?</label>
								</div>
								<div class="col-md-6">
									<select name="calificacionlimpieza" class="form-control">
										<option value="completo">Excelentes</option>
										<option value="medio">Muy buenas</option>
										<option value="horas">Buenas</option>
										<option value="horas">Regulares</option>
										<option value="horas">Malas</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="calificaciondocentes" class="control-label">¿Cómo calificas el desempeño de los Docentes (transmisión de conocimientos, aclaración de dudas y asesorías) de la UTM,durante tu formación profesional y que repercutieron al momento de ejercer tu profesión por primera vez?</label>
								</div>
								<div class="col-md-6">
									<select name="calificaciondocentes" class="form-control">
										<option value="completo">Excelentes</option>
										<option value="medio">Muy buenas</option>
										<option value="horas">Buenas</option>
										<option value="horas">Regulares</option>
										<option value="horas">Malas</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="calificaciontecnicas" class="control-label">¿Cómo calificas las técnicas (investigación, análisis, comparación, etc.) y métodos (uso de casos de estudio, aplicación del conocimiento en problemas reales, etc.) de enseñanza aplicados por los Docentes de la UTM, durante tu formación profesional y que repercutieron al momento de ejercer tu profesión por primera vez?</label>
								</div>
								<div class="col-md-6">
									<select name="calificaciontecnicas" class="form-control">
										<option value="completo">Excelentes</option>
										<option value="medio">Muy buenas</option>
										<option value="horas">Buenas</option>
										<option value="horas">Regulares</option>
										<option value="horas">Malas</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="calificacionevaluacion" class="control-label">¿Cómo calificas la forma y pertinencia de evaluación aplicados por los Docentes de la UTM, durante tu formación profesional y que repercutieron al momento de ejercer tu profesión por primera vez?</label>
								</div>
								<div class="col-md-6">
									<select name="calificacionevaluacion" class="form-control">
										<option value="completo">Excelentes</option>
										<option value="medio">Muy buenas</option>
										<option value="horas">Buenas</option>
										<option value="horas">Regulares</option>
										<option value="horas">Malas</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="continuariasestudios" class="control-label">¿Continuarías realizando algún estudio de posgrado en la Universidad Tecnológica de la Mixteca?:</label>
								</div>
								<div class="col-md-6">
									<select name="continuariasestudios" class="form-control">
										<option value="completo">Si</option>
										<option value="medio">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="recomendaciones" class="control-label">¿Qué recomendarías mejorar en cada una de las opciones que calificaste como regular o mala?:</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<textarea name="recomendaciones" class="form-control"></textarea>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection