@extends('layouts.main')

@section('title', 'Crear nuevo empleado')

@section('contenido')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Crear nuevo equipo</h3>
		</div>
		<div class="panel-body">
			<form action="{{ route('equipos.store') }}" method="POST" role="form">
				@csrf
				<legend>Crear nuevo equipo</legend>

			  	<div class="form-row">
			    	<div class="form-group col-md-3">
			      		<label for="">Nombre del equipo</label>
			      		<input type="text" class="form-control" id="equipo" placeholder="Nombre del equipo" name="equipo" required>
			    	</div>
			    	<div class="form-group col-md-3">
			      		<label for="">Ganados</label>
			      		<input type="number" class="form-control" placeholder="Ganados" name="ganados" min="0" required>
			    	</div>
			    	<div class="form-group col-md-3">
			      		<label for="">Empates</label>
			      		<input type="number" class="form-control" placeholder="Empates" name="empates" min="0" required>
			    	</div>
			    	<div class="form-group col-md-3">
			      		<label for="">Perdidos</label>
			      		<input type="number" class="form-control" placeholder="Perdidos" name="perdidos" min="0" required>
			    	</div>
			  	</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection
