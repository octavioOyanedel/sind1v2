<form class="border border-light p-5" method="{{ $metodo }}" action="{{ route($ruta) }}">

    @include(obtenerCsrf($csrf))

    <p class=" {{ $alinear }} h4 mb-4">{{ $titulo }}</p>

    	<!-- Mensaje informativo -->
	@include('inc.forms.obligatorio.info')

    <!-- Fecha de solicitud -->
	<x-input tipo="date" nombre="fecha_solicitud" placeholder="01-01-2020" size="form-control-sm" required="si" label="Fecha de Solicitud" valor=""/>

	<!-- Tipo de registro -->
	<x-select nombre="tipo_id" titulo="..." size="custom-select-sm" label="Tipo de Registro" required="si" valor=""/>

    <!-- Fecha de solicitud -->
	<x-input tipo="text" nombre="numero" placeholder="123" size="form-control-sm" required="si" label="Número de Registro" valor=""/>	

    <!-- Cheque -->
	<x-input tipo="text" nombre="cheque" placeholder="1234567" size="form-control-sm" required="si" label="Cheque" valor=""/> 

    <!-- Monto -->
	<x-input tipo="text" nombre="monto" placeholder="50000" size="form-control-sm" required="si" label="Monto" valor=""/>

	<!-- Cuenta -->
	<x-select nombre="banca_id" titulo="..." size="custom-select-sm" label="Cuenta" required="si" valor=""/>

	<!-- Concepto -->
	<x-select nombre="concepto_id" titulo="..." size="custom-select-sm" label="Concepto" required="si" valor=""/>

    <!-- Detalle -->
	<x-input tipo="text" nombre="detalle" placeholder="Detalle opcional" size="form-control-sm" required="no" label="Detalle" valor=""/>	
			
	<!-- Boton submit -->
	<x-boton titulo="Agregar"/>

</form>