@error('email')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@else
	<div class="alert alert-info" role="alert">
		Se enviará un enlace de restablecimiento de contraseña a su dirección de correo electrónico.
	</div>
@enderror
