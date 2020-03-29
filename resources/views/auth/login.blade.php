@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-12">
            <!-- Formulario login -->
            <x-form titulo="Iniciar Sesión" metodo="POST" ruta="login" csrf="post" alinear="text-center"/>           
            <!-- Formulario login -->
        </div>
    </div>
</div>
@endsection
