@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">

        	<!-- Nav módulo -->
			<x-nav-admin titulo="Administración Préstamos" enlaces="prestamos" tituloTabla="Forma de Pago"/>

			<!-- Filtro tabla -->
			<x-filtro ruta="home" campos="prestamos_filtro"/>

			<!-- Tabla dinámica -->
			<x-tabla cabecerasTabla="prestamo" />

        </div>
    </div>
</div>
@endsection