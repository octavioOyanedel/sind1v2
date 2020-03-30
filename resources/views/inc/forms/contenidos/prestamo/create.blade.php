<form class="border border-light p-5" method="{{ $metodo }}" action="{{ route($ruta) }}">

    @include(obtenerCsrf($csrf))

    <p class=" {{ $alinear }} h4 mb-4">{{ $titulo }}</p>

    	<!-- Mensaje informativo -->
	@include('inc.forms.obligatorio.info')

    <!-- Rut -->
	<x-input tipo="text" nombre="rut" placeholder="11222333k" size="form-control-sm" required="si" label="Rut" valor=""/>  	

    <!-- Fecha de solicitud -->
	<x-input tipo="date" nombre="fecha_solicitud" placeholder="01-01-2020" size="form-control-sm" required="si" label="Fecha de Solicitud" valor=""/>

    <!-- Número de egreso -->
	<x-input tipo="text" nombre="numero" placeholder="123" size="form-control-sm" required="si" label="Número de Egreso" valor=""/> 

	<!-- Cuenta -->
	<x-select nombre="banca_id" titulo="..." size="custom-select-sm" label="Cuenta" required="si" valor=""/>

	<!-- Método de pago -->
	<x-select nombre="metodo_id" titulo="..." size="custom-select-sm" label="Metodo de Pago" required="si" valor=""/>

    <!-- Cheque -->
	<x-input tipo="text" nombre="cheque" placeholder="1234567" size="form-control-sm" required="si" label="Cheque" valor=""/> 

    <!-- Fecha de solicitud -->
	<x-input tipo="date" nombre="fecha_pago" placeholder="01-01-2020" size="form-control-sm" required="si" label="Fecha de Pago Depósito" valor=""/>	

    <!-- Monto -->
	<x-input tipo="text" nombre="monto" placeholder="50000" size="form-control-sm" required="si" label="Monto" valor=""/>

	<!-- Cuotas -->
	<x-select nombre="cuotas" titulo="..." size="custom-select-sm" label="Cuotas" required="si" valor=""/>	

	<!-- Boton submit -->
	<x-boton titulo="Registrar"/>

</form>