<div>
	<label for="exampleForm2">Default input</label>
    <input type="{{ $tipo }}" name="{{ $nombre }}" id="{{ $nombre }}" class="form-control mb-3 {{ $size }} @error($nombre) is-invalid @enderror" placeholder="{{ $placeholder }}" value="{{ old($nombre) }}" @if ($required === 'si')
    	required
    @endif />
</div>