@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">

        	<!-- Nav módulo -->
			<x-nav-admin titulo="Administración Estudios Realizados" enlaces="estudios" tituloTabla="Nivel Académico"/>

			<!-- Filtro tabla -->
			<x-filtro ruta="home" campos="estudios_filtro"/>

			<!-- Tabla dinámica -->
			<x-tabla cabecerasTabla="estudio" />

        </div>
    </div>
</div>
@endsection