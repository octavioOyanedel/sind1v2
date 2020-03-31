@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">

        	<!-- Nav módulo -->
			<x-nav-admin titulo="Administración Socios" enlaces="Administración"/>

			<!-- Filtro tabla -->
			<x-filtro ruta="home" campos="socios_filtro"/>

			<!-- Tabla dinámica -->
			<x-tabla cabecerasTabla="sede"/>

        </div>
    </div>
</div>
@endsection