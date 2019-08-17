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
						<th>Show</th>
						<th>Edit</th>
						<th>Delete</th>
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
							<td>
								<a href="{{ route('incidencias.show', $incidencia->id) }}" class="btn btn-primary">
									<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
								</a>
							</td>
							<td>
								<a href="{{ route('incidencias.edit', $incidencia->id) }}" class="btn btn-warning">
									<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
								</a>
							</td>
							<td>
								<form action="{{ route('incidencias.destroy', $incidencia->id) }}" method="POST" role="form">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-danger">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
