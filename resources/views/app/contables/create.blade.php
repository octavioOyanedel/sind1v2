@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-12">
            <!-- Formulario solicitar préstamo -->
            <x-form titulo="Agregar Registro Contable" metodo="POST" ruta="contables.store" csrf="post" alinear="text-center"/>           
            <!-- Formulario solicitar préstamo -->
        </div>
    </div>
</div>
@endsection