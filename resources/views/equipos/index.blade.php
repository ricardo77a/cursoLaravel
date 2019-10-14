@extends('layouts.main')

@section('title', 'Listado de Equipos')

@section('contenido')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Listado de equipos</h3>
		</div>
		<div class="panel-body">

			<div class="form-group">
				<a href="{{ route('equipos.create') }}" class="btn btn-primary">Crear nuevo equipo</a>
			</div>
			<div class="table">
				<table class="table table-hover dataTable">
					<thead>
						<tr>
							<th>Id</th>
							<th>Equipo</th>
							<th>Jugados</th>
							<th>Ganados</th>
							<th>Empates</th>
							<th>Perdidos</th>
							<th>Puntos</th>
							<th>Ver</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($equipos as $equipo)
							<tr>
								<td>{{ $equipo->id }}</td>
								<td>{{ $equipo->equipo }}</td>
								<td>{{ $equipo->jugados }}</td>
								<td>{{ $equipo->ganados }}</td>
								<td>{{ $equipo->empates }}</td>
								<td>{{ $equipo->perdidos }}</td>
								<td>{{ $equipo->puntos }}</td>
								<td>
									<a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info">
										<i class="glyphicon glyphicon-eye-open"></i>
									</a>
								</td>
								<td>
									<a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning">
										<i class="glyphicon glyphicon-edit"></i>
									</a>
								</td>

								<td>
									<form method="POST" action="{{ route('equipos.destroy', $equipo->id) }}" role="form">
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
	</div>
@endsection

