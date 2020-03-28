<form class="text-center border border-light p-5" method="{{ $metodo }}" action="{{ route($ruta) }}">

    @include(obtenerCsrf($csrf))

    <p class="h4 mb-4">{{ $titulo }}</p>

	<!-- Input correo -->
	<x-input tipo="email" nombre="email" placeholder="Correo" size="form-control-md" required="si"/>

	<!-- Mensaje informativo -->
	@include('inc.forms.recuperar_pass.info')

	<!-- Boton submit -->
	<x-boton titulo="Enviar Correo"/>

</form>