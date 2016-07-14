<div class="row">
	<div class="col-md-12">
		<small>
			<strong>PARTE I Instrucciones:</strong> Contestar todos los campos de Identificación del Egresado, Estudios Realizados en la UTM y Datos del Trabajo Actual; dejando sólo en blanco aquellos que no apliquen contigo.
		</small>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<p class="lead text-center seccion">
			IDENTIFICACIÓN DEL EGRESADO
		</p>
	</div>
</div>
<div class="row">
	<div class="col-md-5">
		<div class="form-group">
			<div class="col-md-3">
				<label for="nombre" class="control-label">Nombre:</label>
			</div>
			<div class="col-md-9">
				<input type="text" name="nombre" class="form-control" required="required">
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<div class="col-md-3">
				<label for="genero">CURP: </label>
			</div>
			<div class="col-md-9">
				<input type="text" name="curp" class="form-control" required="required">
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<div class="col-md-6">
				<label for="genero">Genero: </label>
			</div>
			<div class="col-md-6">
				<select name="genero" class="form-control" required>
					<option disabled selected value> -- selecciona una opción -- </option>
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
				<label for="fechadenacimiento" class="control-label">Fecha de nacimiento:</label>
			</div>
			<div class="col-md-7">
				<input type="date" name="fechadenacimiento" class="form-control" required>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-3">
				<label for="nacionalidad" class="control-label">Nacionalidad:</label>
			</div>
			<div class="col-md-9">
				<input type="text" name="nacionalidad" class="form-control" required>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-5">
				<label for="lugardeorigen" class="control-label">Lugar de origen:</label>
			</div>
			<div class="col-md-7">
				<input type="text" name="lugardeorigen" class="form-control" required>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-3">
				<label for="lugardetrabajo" class="control-label">Lugar de trabajo:</label>
			</div>
			<div class="col-md-9">
				<input type="text" name="lugardetrabajo" class="form-control">
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-5">
				<label for="telefonodecontacto" class="control-label">Télefono de contacto:</label>
			</div>
			<div class="col-md-7">
				<input type="text" name="telefonodecontacto" class="form-control" required>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-3">
				<label for="correoelectronico" class="control-label">Correo electrónico:</label>
			</div>
			<div class="col-md-9">
				<input type="email" name="correoelectronico" class="form-control" required>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<p class="lead text-center seccion">
			ESTUDIOS REALIZADOS EN LA UTM
		</p>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-5">
				<label for="carrera" class="control-label">Carrera:</label>
			</div>
			<div class="col-md-7">
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
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-3">
				<label for="formadetitulacion" class="control-label">Forma de titulación:</label>
			</div>
			<div class="col-md-9">
				<select name="formadetitulacion" class="form-control" required>
					<option disabled selected value> -- selecciona una opción -- </option>
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
			<div class="col-md-5 text-left">
				<label for="fechadeinicioestudios" class="control-label pull-left">Fecha de inicio de estudios:</label>
			</div>
			<div class="col-md-7">
				<input type="date" name="fechadeinicioestudios" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-3">
				<label for="fechadefinestudios" class="control-label">Fecha de fin de estudios:</label>
			</div>
			<div class="col-md-9">
				<input type="date" name="fechadefinestudios" class="form-control">
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
					<option disabled selected value> -- selecciona una opción -- </option>
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
		<p class="lead text-center seccion">
			DATOS DEL TRABAJO ACTUAL
		</p>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-4">
				<label for="nombredeempresa" class="control-label">Nombre empresa:</label>
			</div>
			<div class="col-md-8">
				<input type="text" name="nombredeempresa" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-4">
				<label for="tipodeempresa" class="control-label">Tipo:</label>
			</div>
			<div class="col-md-8">
				<select name="tipodeempresa" class="form-control">
					<option value="public">Pública</option>
					<option value="privada">Privada</option>
					<option value="propia">Propio</option>
				</select>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-4">
				<label for="fechadeingreso" class="control-label">Fecha de ingreso:</label>
			</div>
			<div class="col-md-8">
				<input type="date" name="fechadeingreso" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-4">
				<label for="puestoactual" class="control-label">Puesto actual:</label>
			</div>
			<div class="col-md-8">
				<input type="text" name="puestoactual" class="form-control">
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-4">
				<label for="puestoinicial" class="control-label">Puesto inicial:</label>
			</div>
			<div class="col-md-8">
				<input type="text" name="puestoinicial" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-4">
				<label for="tipodehorariolaboral" class="control-label">Horario laborable:</label>
			</div>
			<div class="col-md-8">
				<select name="tipodehorariolaboral" class="form-control">
					<option value="completo">Completo</option>
					<option value="medio">Medio</option>
					<option value="horas">Horas</option>
				</select>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-4">
				<label for="tipodecontrato" class="control-label">Tipo de contrato:</label>
			</div>
			<div class="col-md-8">
				<input type="text" name="tipodecontrato" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-4">
				<label for="telefonodeempresa" class="control-label">Télefono de la empresa:</label>
			</div>
			<div class="col-md-8">
				<input type="text" name="telefonodeempresa" class="form-control">
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<div class="col-md-4">
				<label for="ingresomensual" class="control-label">Ingreso mensual:</label>
			</div>
			<div class="col-md-8">
				<select name="ingresomensual" class="form-control">
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
				<label for="susactividadeslaborales" class="control-label">Sus actividades laborales:</label>
			</div>
			<div class="col-md-8">
				<select name="susactividadeslaborales" class="form-control" required>
					<option value="requierendelaformaciondemicarrera"> Requieren de la formación de mi carrera.</option>
					<option value="norequierendelaformaciondemicarrera"> No requieren de la formación de mi carrera.</option>
					<option value="norequierendeunaprofesion"> No requieren de una profesión. </option>
				</select>
			</div>
		</div>
	</div>
</div>