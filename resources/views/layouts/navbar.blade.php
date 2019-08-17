<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Curso Laravel</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">



			<ul class="nav navbar-nav">
				<li class="{{ Route::currentRouteNamed('empleados.index') ? 'active' : ''  }}">
					<a href="{{ route('empleados.index') }}">Listado de Empleados</a>
				</li>
				<li class="{{ Route::currentRouteNamed('empleados.create') ? 'active' : ''  }}">
					<a href="{{ route('empleados.create') }}" >Crear Empleado</a>
				</li>
			</ul>


			<ul class="nav navbar-nav">
				<li class="{{ Route::currentRouteNamed('incidencias.index') ? 'active' : ''  }}">
					<a href="{{ route('incidencias.index') }}">Listado de Incidencias</a>
				</li>
				<li class="{{ Route::currentRouteNamed('incidencias.create') ? 'active' : ''  }}">
					<a href="{{ route('incidencias.create') }}" >Crear Incidencia</a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
