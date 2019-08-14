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
					<input type="text" class="form-control" id="" placeholder="Escribe el nombre del empleado..." name="nombre">
				</div>
				<div class="form-group">
					<label for="">Apellido Paterno</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el apellido paterno del empleado..." name="apellido_paterno">
				</div>
				<div class="form-group">
					<label for="">Apellido Materno</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el apellido materno del empleado..." name="apellido_materno">
				</div>
				<div class="form-group">
					<label for="">Dirección</label>
					<input type="text" class="form-control" id="" placeholder="Escribe la dirección a la que pertenece el empleado" name="direccion">
				</div>
				<div class="form-group">
					<label for="">Puesto</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el puesto del empleado..." name="puesto">
				</div>
				<div class="form-group">
					<label for="">Correo</label>
					<input type="email" class="form-control" id="" placeholder="Escribe el correo electrónico del empleado..." name="correo">
				</div>
				<div class="form-group">
					<label for="">Teléfono</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el teléfono del empleado..." name="telefono">
				</div>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>
@endsection
