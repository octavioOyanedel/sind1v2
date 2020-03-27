<div>
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark primary-color">

		<!-- Navbar brand -->
		<a class="navbar-brand" href="{{ route('home') }}">@svg('logo_sin_texto')</a>

		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSind1"
		aria-controls="navSind1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<!-- Collapsible content -->
	<div class="collapse navbar-collapse" id="navSind1">

		<!-- Links -->
		<ul class="navbar-nav mr-auto">

			<!-- Dropdown usuario -->
			<x-enlace-nav enlacePrincipal="Usuario"/>
			<!-- Dropdown socios -->
			<x-enlace-nav enlacePrincipal="Socios"/>
			<!-- Dropdown préstamos -->
			<x-enlace-nav enlacePrincipal="Préstamos"/>
			<!-- Dropdown registros contables -->
			<x-enlace-nav enlacePrincipal="Contabilidad"/>
			<!-- Dropdown estadísticas -->
			<x-enlace-nav enlacePrincipal="Estadísticas"/>
			<!-- Dropdown administración -->
			<x-enlace-nav enlacePrincipal="Administración"/>

		</ul>
		<!-- Links -->

		<form class="form-inline my-2 my-lg-0 ml-auto">
			<input class="form-control form-control-sm" type="search" placeholder="Buscar" aria-label="Buscar">
			<button class="btn btn-outline-white btn-sm my-2 my-sm-0 ml-3" type="submit">Buscar</button>
		</form>		

	</div>
	<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
</div>