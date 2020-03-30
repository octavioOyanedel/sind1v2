<div>

	@include('inc.forms.socio.label_error')
	
	<div class="mb-2">
		<select id="{{ $nombre }}" name="{{ $nombre }}" class="browser-default custom-select {{ $size }}" @if ($required === 'si') required @endif>
			<option value="" selected>{{ $titulo }}</option>
				@if ($nombre === 'genero')	
					<option value="Dama">Dama</option>
					<option value="Varón">Varón</option>
				@else	
					<option value="">gdfgdfgdfgdfgdf</option>
					<option value="">dgf</option>
					<option value="">dfgfd</option>
					<option value="">dfgfdg</option>
					<option value="">dfgdfgfdgfdgdg gdf gf fdg fdgdfgfd dfgfd</option>
					<option value="">dfgd</option>
					<option value="">tyrty</option>
					<option value="">rty</option>
					<option value="">rty tyt tyrt</option>
					<option value="">rtytry tyty ty</option>
				@endif
		</select>		
	</div>	
			
</div>