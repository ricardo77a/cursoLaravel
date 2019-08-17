@extends('layouts.main')
@section('title', 'Editar Incidencia')

@section('contenido')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Editar Incidencia</h3>
		</div>
		<div class="panel-body">
			<a href="{{ route('incidencias.index') }}" class="btn btn-primary">Regresar al listado</a>
			<br><br>

			<form action="{{ route('incidencias.update', $incidencia->id) }}" method="POST" role="form">
				@method('PUT')
				@csrf
				<legend>Nueva Incidencia</legend>

				<div class="form-group">
					<label for="incidencia">Incidencia</label>
					<input type="text" class="form-control" id="incidencia" placeholder="Describe la incidencia" name="incidencia" value="{{ $incidencia->incidencia }}">
					@error('incidencia')
					<br>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Atención!</strong> {{ $message }}
						</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="incidencia">Comentario</label>
					<input type="text" class="form-control" id="comentario" placeholder="Describe un comentario acerca de la incidencia" name="comentario" value="{{ $incidencia->comentario }}">
					@error('comentario')
					<br><br>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Atención!</strong> {{ $message }}
					</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="incidencia">Empleado</label>
					<select name="empleado_id" id="input" class="form-control" required="required">
						@foreach ($empleados as $empleado)
							<option value="{{ $empleado->id }}">{{ $empleado->nombre }} {{ $empleado->apellido_paterno }} {{ $empleado->apelllido_materno }}</option>
						@endforeach
					</select>
				</div>


				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
@endsection
