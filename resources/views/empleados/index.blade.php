@extends('layouts.main')

@section('title', 'Listado de Empleados')

@section('contenido')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Listado de empleados</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover dataTable">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellido Paterno</th>
						<th>Apellido Materno</th>
						<th>Puesto</th>
						<th>Ver</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($empleados as $empleado)
						<tr>
							<td>{{ $empleado->id }}</td>
							<td>{{ $empleado->nombre }}</td>
							<td>{{ $empleado->apellido_paterno }}</td>
							<td>{{ $empleado->apellido_materno }}</td>
							<td>{{ $empleado->puesto }}</td>
							<td>
								<a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-info">
									{{--
									<i class="glyphicon glyphicon-eye-open"></i>
									 --}}
									 Show
								</a>
							</td>
							<td>
								<a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning">
									{{--
									<i class="glyphicon glyphicon-edit"></i>
									 --}}
									 edit
								</a>
							</td>

							<td>
								<form method="POST" action="{{ route('empleados.destroy', $empleado->id) }}" role="form">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-danger">
										{{--
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
										 --}}
										 delete
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

