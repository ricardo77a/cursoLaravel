<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
	</head>
	<body>
		<p>Hola desde main</p>

		@section('menu')
			<p>En esta parte va un menú</p>
		@endsection
		<div>
			@yield('contenido')
		</div>
	</body>
</html>
