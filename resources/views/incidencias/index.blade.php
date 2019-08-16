@extends('layouts.main')

@section('title', 'Listado de Incidencias')

@section('contenido')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Listado de Incidencias</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover dataTable">
				<thead>
					<tr>
						<th>Id</th>
						<th>Incidencia</th>
						<th>Comentario</th>
						<th>Empleado</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($incidencias as $incidencia)
						<tr>
							<td>{{ $incidencia->id }}</td>
							<td>{{ $incidencia->incidencia }}</td>
							<td>{{ $incidencia->comentario }}</td>
							<td>
								{{ $incidencia->empleado->nombre }}
								{{ $incidencia->empleado->apellido_paterno }}
								{{ $incidencia->empleado->apellido_materno }}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
