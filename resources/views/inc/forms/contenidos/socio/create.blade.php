<form class="border border-light p-5" method="{{ $metodo }}" action="{{ route($ruta) }}">

    @include(obtenerCsrf($csrf))

    <p class=" {{ $alinear }} h4 mb-4">{{ $titulo }}</p>

    	<!-- Mensaje informativo -->
	@include('inc.forms.obligatorio.info')

    <!-- Número socio -->
	<x-input tipo="text" nombre="numero" placeholder="123" size="form-control-sm" required="si" label="Número de Socio" valor=""/> 

    <!-- Fecha ingreso a sindicato --> 
 	<x-input tipo="date" nombre="fecha_sind1" placeholder="01-01-2020" size="form-control-sm" required="no" label="Fecha de Ingreso Sind1" valor=""/>

    <!-- Primer nombre -->
    <x-input tipo="text" nombre="nombre1" placeholder="Nombre" size="form-control-sm" required="si" label="Primer Nombre" valor=""/>

    <!-- Segundo nombre -->
	<x-input tipo="text" nombre="nombre2" placeholder="Nombre" size="form-control-sm" required="no" label="Segundo Nombre" valor=""/>

    <!-- Primer nombre -->
    <x-input tipo="text" nombre="apellido1" placeholder="Apellido" size="form-control-sm" required="si" label="Apellido Paterno" valor=""/>	

    <!-- Segundo nombre -->
	<x-input tipo="text" nombre="apellido2" placeholder="Apellido" size="form-control-sm" required="no" label="Apellido Materno" valor=""/>

    <!-- Rut -->
	<x-input tipo="text" nombre="rut" placeholder="11222333k" size="form-control-sm" required="si" label="Rut" valor=""/>   

	<!-- Género -->
	<x-select nombre="genero" titulo="..." size="custom-select-sm" label="Género" required="si" valor=""/>

    <!-- Fecha de nacimiento -->
	<x-input tipo="date" nombre="fecha_nac" placeholder="01-01-2020" size="form-control-sm" required="no" label="Fecha de Nacimiento" valor=""/>

    <!-- Celular -->
	<x-input tipo="text" nombre="celular" placeholder="911223344" size="form-control-sm" required="no" label="Celular" valor=""/>

    <!-- Correo -->
	<x-input tipo="email" nombre="correo" placeholder="ejemplo@pucv.cl" size="form-control-sm" required="no" label="Correo" valor=""/> 	

	<!-- Comuna -->
	<x-select nombre="comuna_id" titulo="..." size="custom-select-sm" label="Comuna" required="no" valor=""/>

	<!-- Ciudad -->
	<x-select nombre="ciudad_id" titulo="..." size="custom-select-sm" label="Ciudad" required="no" valor=""/>

    <!-- Dirección -->
	<x-input tipo="text" nombre="direccion" placeholder="Av. Uno Depto. 11-B" size="form-control-sm" required="no" label="Dirección" valor=""/>

    <!-- Nacionalidad -->
	<x-select nombre="nacionalidad_id" titulo="..." size="custom-select-sm" label="Nacionalidad"required="no" valor=""/>

    <!-- Fecha ingreso a sindicato -->
	<x-input tipo="date" nombre="fecha_pucv" placeholder="01-01-2020" size="form-control-sm" required="no" label="Fecha de Ingreso PUCV" valor=""/>

	<!-- Sede -->
	<x-select nombre="sede_id" titulo="..." size="custom-select-sm" label="Sede" required="no" valor=""/>

	<!-- Área -->
	<x-select nombre="area_id" titulo="..." size="custom-select-sm" label="Área" required="no" valor=""/>

	<!-- Cargo -->
	<x-select nombre="cargo_id" titulo="..." size="custom-select-sm" label="Cargo" required="no" valor=""/>

    <!-- Anexo -->
	<x-input tipo="text" nombre="anexo" placeholder="3093" size="form-control-sm" required="no" label="Anexo" valor=""/>

	<!-- Boton submit -->
	<x-boton titulo="Solicitar"/>

</form>