<div>
    <form class="text-center border border-light p-5" method="{{ $metodo }}" action="{{ route($ruta) }}">

        @include(obtenerCsrf($csrf))

        <p class="h4 mb-4">{{ $titulo }}</p>

		<!-- Input correo -->
		<x-input tipo="email" nombre="email" placeholder="Correo" required="si"/>

		<!-- Input correo -->
		<x-input tipo="password" nombre="password" placeholder="Contraseña" required="si"/>

		<!-- Error validación -->
		@include('inc.forms.login.error')
		
		<!-- recordar sesión y recuperar contraseña -->
		@include('inc.forms.login.recordar_recuperar_pass')

		<!-- Boton submit -->
		<x-boton titulo="Ingresar"/>

		<!-- Redes sociales -->
		@include('inc.forms.login.siguenos')
    </form>
</div>