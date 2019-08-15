@extends('layouts.main')

@section('title', 'Crear nuevo empleado')

@section('contenido')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Crear nuevo empleado</h3>
		</div>
		<div class="panel-body">
			<form action="{{ route('empleados.store') }}" method="POST" role="form">
				@csrf
				<legend>Crear Empleado</legend>

				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el nombre del empleado..." name="nombre" value="{{ old('nombre') }}">
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
					<input type="text" class="form-control" id="" placeholder="Escribe el apellido paterno del empleado..." name="apellido_paterno" value="{{ old('apellido_paterno') }}">
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
					<input type="text" class="form-control" id="" placeholder="Escribe el apellido materno del empleado..." name="apellido_materno" value="{{ old('apellido_materno') }}">
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
					<input type="text" class="form-control" id="" placeholder="Escribe la dirección a la que pertenece el empleado" name="direccion" value="{{ old('direccion') }}">
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
					<input type="text" class="form-control" id="" placeholder="Escribe el puesto del empleado..." name="puesto" value="{{ old('puesto') }}">
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
					<input type="text" class="form-control" id="" placeholder="Escribe el correo electrónico del empleado..." name="correo" value="{{ old('correo') }}">
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
					<input type="text" class="form-control" id="" placeholder="Escribe el teléfono del empleado..." name="telefono" value="{{ old('telefono') }}">
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
