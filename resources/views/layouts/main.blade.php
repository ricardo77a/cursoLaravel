<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>


		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		{{-- CSS de DataTables --}}
		<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}">
		{{-- Jquery del Datatables --}}
		<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
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
