@extends('layouts.main')

@section('title', 'Crear nuevo empleado')

@section('contenido')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Editar empleado</h3>
		</div>
		<div class="panel-body">
			<form action="{{ route('empleados.update', $empleado->id) }}" method="POST" role="form">
				@method('PUT')
				@csrf
				<legend>Editar Empleado</legend>

				<a href="{{ route('empleados.index') }}" class="btn btn-info">
					Regresar al listado de empleados
				</a><br><br>

				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el nombre del empleado..." name="nombre" value="{{ $empleado->nombre }}">
					@error('nombre')
						<br>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Atención!</strong> {{ $message }}
						</div>
					@enderror
				</div>



				<div class="form-group">
					<label for="">Apellido Paterno</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el apellido paterno del empleado..." name="apellido_paterno" value="{{ $empleado->apellido_paterno }}">
					@error('apellido_paterno')
						<br>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Atención!</strong> {{ $message }}
						</div>
					@enderror
				</div>


				<div class="form-group">
					<label for="">Apellido Materno</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el apellido materno del empleado..." name="apellido_materno" value="{{ $empleado->apellido_materno }}">
					@error('apellido_materno')
						<br>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Atención!</strong> {{ $message }}
						</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Dirección</label>
					<input type="text" class="form-control" id="" placeholder="Escribe la dirección a la que pertenece el empleado" name="direccion" value="{{ $empleado->direccion }}">
					@error('direccion')
						<br>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Atención!</strong> {{ $message }}
						</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Puesto</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el puesto del empleado..." name="puesto" value="{{ $empleado->puesto }}">
					@error('puesto')
						<br>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Atención!</strong> {{ $message }}
						</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Correo</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el correo electrónico del empleado..." name="correo" value="{{ $empleado->correo }}">
					@error('correo')
						<br>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Atención!</strong> {{ $message }}
						</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Teléfono</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el teléfono del empleado..." name="telefono" value="{{ $empleado->telefono }}">
					@error('telefono')
						<br>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Atención!</strong> {{ $message }}
						</div>
					@enderror
				</div>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>
@endsection
