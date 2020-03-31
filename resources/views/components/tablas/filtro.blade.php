<div>
	<form method="GET" action="">
		<div class="form-row">
			<div class="col-md-3 col-sm-12">
				<select id="cantidad" class="custom-select custom-select-sm mb-2" name="cantidad">
					<option selected>Cantidad</option>
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="50">50</option>
					<option value="100">100</option>
				</select>
			</div>
			<div class="col-md-3 col-sm-12">
				<select id="columna" class="custom-select custom-select-sm mb-2" name="columna">
					<option selected>Columna</option>
					<!-- Campos de filtro -->
					@foreach (obtenerCamposFiltro($campos) as $valor => $nombre)
						<option value="{{ $valor }}">{{ $nombre }}</option>
					@endforeach

				</select>
			</div>
			<div class="col-md-3 col-sm-12">
				<select id="orden" class="custom-select custom-select-sm mb-2" name="orden">
					<option selected>Orden</option>
					<option value="ASC">Ascendente</option>
					<option value="DESC">Descendente</option>
				</select>
			</div>  
			<div class="col-md-3 col-sm-12">
				<!-- Last name -->
				<button id="filtro" type="submit" class="btn btn-sm btn-block btn-blue mb-2 mt-0 mr-0 filtro">Filtrar</button>
			</div>       
		</div>

		<!-- Complemento filtro -->
		<input class="form-control" type="hidden" name="campo" value="">    
		<input class="form-control" type="hidden" name="page" value="">    
	</form> 
</div>