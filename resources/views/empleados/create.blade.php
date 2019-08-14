@extends('layouts.main')

@section('title', 'Crear nuevo empleado')

@section('contenido')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Crear nuevo empleado</h3>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form">
				<legend>Crear Empleado</legend>

				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el nombre del empleado..." name="nombre">
				</div>

				<div class="form-group">
					<label for="">Apellido Paterno</label>
					<input type="text" class="form-control" id="" placeholder="Escribe el apellido paterno del empleado..." name="apellido_paterno">
				</div>


				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
@endsection
