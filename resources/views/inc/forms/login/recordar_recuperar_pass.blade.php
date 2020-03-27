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