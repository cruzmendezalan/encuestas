@extends('layouts.reportes')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<div class=" btn-group btn-group-vertical" role="group" aria-label="...">
			  <button type="button" class="btn btn-default">Reporte Egresados</button>
			  <button type="button" class="btn btn-default">Reporte Empleadores</button>
			  <button type="button" class="btn btn-default">Reporte Global Excel</button>
			</div>
		</div>
		<div class="col-md-10">
			<!-- 16:9 aspect ratio -->
			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" src="{{ url('reportes/egresados') }}"></iframe>
			</div>
		</div>
	</div>
</div>
@endsection



