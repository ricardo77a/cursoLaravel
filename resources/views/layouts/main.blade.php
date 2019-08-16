<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		{{-- CSS de DataTables --}}
		<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}">
		<script src="{{ asset('js/jquery.js') }}"></script>
		{{-- Jquery del Datatables --}}
		<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</head>
	<body>

		@include('layouts.navbar')

		<div class="container">
			@yield('contenido')
		</div>
		{{-- Script para llamar a DataTables --}}
		<script type="text/javascript">
			$(document).ready( function () {
			    $('.dataTable').DataTable();
			});
		</script>
	</body>
</html>
