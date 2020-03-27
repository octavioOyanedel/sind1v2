@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-12">

            <form class="text-center border border-light p-5" method="POST" action="{{ route('login') }}">
                 @csrf

                <p class="h4 mb-4">Iniciar Sesión</p>

                <!-- Email -->
                <input type="email" id="email" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="Correo" name="email" value="{{ old('email') }}">

                <!-- Password -->
                <input type="password" id="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="Contraseña" name="password">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                      {{ $message }}
                    </div>
                @enderror
                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">Recuerdame</label>
                        </div>
                    </div>
                    <div>
                        <!-- Forgot password -->
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Olvidó su contraseña?</a>
                        @endif                        
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Ingresar</button>

                <!-- Social login -->
                <p>Síguenos en:</p>

                <a href="https://www.facebook.com/sindicato1pucv" class="mx-2" role="button" target="_blank"><i class="fab fa-facebook-f light-blue-text"></i></a>

            </form>
            <!-- Default form login -->

        </div>
    </div>
</div>
@endsection
