@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-12">
            <!-- Formulario registrar socios -->
            <x-form titulo="Registrar Socio" metodo="POST" ruta="socios.store" csrf="post" alinear="text-center"/>           
            <!-- Formulario registrar socios -->
        </div>
    </div>
</div>
@endsection