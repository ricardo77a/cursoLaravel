@extends('layouts.main')

@section('title', 'Ver Incidencia')

@section('contenido')

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Visualizar la incidencia</h3>
		</div>
		<div class="panel-body">
			<a href="{{ route('incidencias.index') }}" class="btn btn-primary">Regresar al listado</a>
			<br><br>
			<p>El usuario {{ $incidencia->empleado->nombre }} {{ $incidencia->empleado->apellido_paterno }} {{ $incidencia->empleado->apellido_materno }}, se hizo a creedor a una incidencia de tipo {{ $incidencia->incidencia }}, por lo cual {{ $incidencia->comentario }}.</p>
		</div>
	</div>

@endsection
