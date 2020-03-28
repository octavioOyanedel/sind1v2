<form class="text-center border border-light p-5" method="{{ $metodo }}" action="{{ route($ruta) }}">

    @include(obtenerCsrf($csrf))

    <p class="h4 mb-4">{{ $titulo }}</p>

    <!-- Número socio -->
	<x-input tipo="text" nombre="numero" placeholder="Número Socio" size="form-control-sm" required="si"/> 

    <!-- Fecha ingreso a sindicato -->
	<x-input tipo="date" nombre="fecha_sind1" placeholder="Fecha Ingreso Sind1" size="form-control-sm" required="no"/>

    <!-- Primer nombre -->
    <x-input tipo="text" nombre="nombre1" placeholder="Primer Nombre" size="form-control-sm" required="si"/>

    <!-- Segundo nombre -->
	<x-input tipo="text" nombre="nombre2" placeholder="Segundo Nombre" size="form-control-sm" required="no"/>

    <!-- Primer nombre -->
    <x-input tipo="text" nombre="apellido1" placeholder="Apellido Paterno" size="form-control-sm" required="si"/>	

    <!-- Segundo nombre -->
	<x-input tipo="text" nombre="apellido2" placeholder="Apellido Materno" size="form-control-sm" required="no"/>            

    <!-- Rut -->
	<x-input tipo="text" nombre="rut" placeholder="Rut" size="form-control-sm" required="si"/>   

	<!-- Género -->
	<small class="form-text error-form"><b>Error de validación.</b></small>
	<div class="mb-4">
		<select name="genero" id="genero" class="browser-default custom-select custom-select-sm">
			<option selected>Género</option>
			<option value="Dama">Dama</option>
			<option value="Varón">Varón</option>
		</select>		
	</div>


    <!-- Fecha de nacimiento -->
	<x-input tipo="date" nombre="fecha_nac" placeholder="Fecha Nacimiento" size="form-control-sm" required="no"/>

    <!-- Celular -->
	<x-input tipo="text" nombre="celular" placeholder="Celular" size="form-control-sm" required="no"/>

    <!-- Correo -->
	<x-input tipo="email" nombre="correo" placeholder="Correo" size="form-control-sm" required="no"/> 	

	<!-- Comuna -->
	<x-select nombre="comuna_id" titulo="Comuna..." size="custom-select-sm"/>

	<!-- Ciudad -->
	<x-select nombre="ciudad_id" titulo="Ciudad..." size="custom-select-sm"/>

    <!-- Dirección -->
	<x-input tipo="text" nombre="direccion" placeholder="Dirección" size="form-control-sm" required="no"/>

    <!-- Nacionalidad -->
	<x-select nombre="nacionalidad_id" titulo="Nacionalidad..." size="custom-select-sm"/>

    <!-- Fecha ingreso a sindicato -->
	<x-input tipo="date" nombre="fecha_pucv" placeholder="Fecha Ingreso PUCV" size="form-control-sm" required="no"/>

	<!-- Sede -->
	<x-select nombre="sede_id" titulo="Sede..." size="custom-select-sm"/>

	<!-- Área -->
	<x-select nombre="area_id" titulo="Área..." size="custom-select-sm"/>

	<!-- Cargo -->
	<x-select nombre="cargo_id" titulo="Cargo..." size="custom-select-sm"/>

    <!-- Anexo -->
	<x-input tipo="text" nombre="anexo" placeholder="Anexo" size="form-control-sm" required="no"/>

	<!-- Boton submit -->
	<x-boton titulo="Registrar"/>

</form>