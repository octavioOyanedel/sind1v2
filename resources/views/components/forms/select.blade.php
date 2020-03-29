<div>

	@include('inc.forms.socio.label_error')
	
	<div class="mb-2">
		<select id="{{ $nombre }}" name="{{ $nombre }}" class="browser-default custom-select {{ $size }}" @if ($required === 'si') required @endif>
			<option value="" selected>{{ $titulo }}</option>
				@if ($nombre === 'genero')	
					<option value="Dama">Dama</option>
					<option value="Varón">Varón</option>
				@else	
					<option value="" selected>{{ $titulo }}</option>
				@endif
		</select>		
	</div>	
			
</div>