@extends('layouts.main')

@section('title', 'Datos del empleado')

@section('contenido')

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Datos del empleado</h3>
		</div>
		<div class="panel-body">
			<a href="{{ route('empleados.index') }}" class="btn btn-info">
				Regresar al listado de empleados
			</a>
			<br><br>

			<p>
				El nombre del empleado es:
				{{ $empleado->nombre }} {{ $empleado->apellido_paterno }} {{ $empleado->apellido_materno }}
			</p>
			<p>El puesto del empleado es: {{ $empleado->puesto }}</p>
			<p>El teléfono del empleado es: {{ $empleado->telefono }}</p>
			<p>El correo del empleado es: {{ $empleado->correo }}</p>
			<p>El empleado vive en: {{ $empleado->direccion }}</p>

		</div>
	</div>

@endsection
