<div>
    <input type="{{ $tipo }}" name="{{ $nombre }}" id="{{ $nombre }}" class="form-control mb-4 @error($nombre) is-invalid @enderror" placeholder="{{ $placeholder }}" value="{{ old($nombre) }}" @if ($required === 'si')
    	required
    @endif>
</div>