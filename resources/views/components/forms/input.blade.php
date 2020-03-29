<div>

	@include('inc.forms.socio.label_error')

    <input type="{{ $tipo }}" name="{{ $nombre }}" id="{{ $nombre }}" class="form-control mb-2 {{ $size }} @error($nombre) is-invalid @enderror" placeholder="{{ $placeholder }}" value="{{ old($nombre) }}" @if ($required === 'si') required @endif />

</div>