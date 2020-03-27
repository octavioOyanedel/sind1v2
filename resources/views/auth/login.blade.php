@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-12">
            <!-- Default form login -->
            <x-form titulo="Iniciar Sesión" metodo="POST" ruta="login" csrf="post"/>           
            <!-- Default form login -->
        </div>
    </div>
</div>
@endsection
