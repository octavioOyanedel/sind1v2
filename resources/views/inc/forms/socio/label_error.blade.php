@if ($label != '')
	@error($nombre)
		<small class="form-text error-form"><b> Error de validación. </b></small>
	@else
		<label for="{{ $nombre }}"><b>{{ $label }}</b> @if ($required === 'si') * @endif </label>
	@enderror
@endif
