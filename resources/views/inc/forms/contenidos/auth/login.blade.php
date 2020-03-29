<form class="border border-light p-5" method="{{ $metodo }}" action="{{ route($ruta) }}">

    @include(obtenerCsrf($csrf))

    <p class="{{ $alinear }} h4 mb-4">{{ $titulo }}</p>

	<!-- Input correo -->
	<x-input tipo="email" nombre="email" placeholder="Correo" size="form-control-md" required="si" label=""/>

	<!-- Input contraseña -->
	<x-input tipo="password" nombre="password" placeholder="Contraseña" size="form-control-md" required="si" label=""/>

	<!-- Error validación -->
	@include('inc.forms.login.error')

	<!-- recordar sesión y recuperar contraseña -->
	@include('inc.forms.login.recordar_recuperar_pass')

	<!-- Boton submit -->
	<x-boton titulo="Ingresar"/>

	<!-- Redes sociales -->
	@include('inc.forms.login.siguenos')
</form>