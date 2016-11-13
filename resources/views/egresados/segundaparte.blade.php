<div class="row">
	<div class="col-md-12">
		<small>
			<strong>PARTE II Instrucciones:</strong> Indicar las empresas en que se ha desarrollado profesionalmente, comenzando por la menos antigua hasta la más antigua.Indicar las tres funciones principales que desarrolló en cada empresa.
		</small>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<p class="lead text-center seccion">
			DESARROLLO PROFESIONAL
		</p>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<input type="hidden" name="desarrolloprof" id="desarrolloprof" value="">
		<table class="table table-bordered" id="desarrolloProfesional">
			<thead>
				<tr>
					<td class="text-center"><strong>Empresa en la que laboró</strong></td>
					<td class="text-center"><strong>Puesto en el que inicio</strong></td>
					<td class="text-center"><strong>Puesto en el que terminó</strong></td>
					<td class="text-center"><strong>Antigüedad (Años - meses)</strong></td>
					<td class="text-center"><strong>Funciones principales (Sólo tres)</strong></td>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="text-center"><button type="button" class="btn btn-success" data-toggle="modal" href='#modal-id'>Agregar empleo</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Desarrollo Profesional</h4>
			</div>
			<div class="modal-body">
				<div class="col-md-12" id="form1">
					<div id="formreset" class="form-horizontal modal-form" >
						<div class="form-group">
							<div class="col-md-4">
								<label class="control-label" for="tabla_nombreempresa">Empresa en la que laboró:</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="nombreempresa" value="" data-toggle="tooltip" title="Campo indispensable" class="form-control" placeholder="Nombre de la empresa">
							</div>
							
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label class="control-label" for="tabla_puestoinicial">Puesto en el que inicio:</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="puestoinicial" value="" data-toggle="tooltip" title="Campo indispensable" class="form-control">
							</div>	
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label class="control-label" for="tabla_puestoactual">Puesto en el que finalizo/actual:</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="puestoactual" value="" data-toggle="tooltip" title="Campo indispensable" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label class="control-label" for="tabla_antiguedad">Antigüedad (años/meses):</label>
							</div>	
							<div class="col-md-8">
								<input type="text" name="tabla_antiguedad" value="" data-toggle="tooltip" title="Campo indispensable" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label class="control-label" for="tabla_funciones">Funciones principales: </label>
							</div>	
							<div class="col-md-8">
								<input type="text" name="tabla_funciones" value="" data-toggle="tooltip" title="Campo indispensable" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Finalizar</button>
				<button type="button" class="btn btn-primary" onclick="agregarEmpleo();">Agregar empleo</button>
			</div>
		</div>
	</div>
</div>
