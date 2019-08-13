@extends('layouts.main')

@section('title', 'info')

@section('contenido')
	<p>Hola, estos son los integrantes del curso</p>

	@foreach ($arreglo as $a)
		<p>{{ $a }}</p>
	@endforeach

	@if ($calificacion >= 100)
		<p style="background-color: green; color: white;">Excelente</p>
	@else
		<p style="background-color: red; color: white;">Reprobado :-(</p>
	@endif

@endsection
