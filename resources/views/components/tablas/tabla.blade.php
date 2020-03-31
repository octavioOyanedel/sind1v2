<div>

	<!-- Tabla -->
	<div class="table-responsive mt-4">

		<table class="table table-sm table-hover">
			<thead class="">
				<tr>
					<th width="60"></th>
					<th width="60"></th>

					<!-- cabecera tabla -->
					@foreach (obtenerCabecerasTabla($cabecerasTabla) as $cabecera)
						<th class=""><b>{{ $cabecera }}</b></th>
					@endforeach

				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center"><a class="btn btn-danger btn-sm boton-tabla" title="Eliminar"><i class="fas fa-trash"></i></a></td>
					<td class="text-center"><a class="btn btn-yellow btn-sm boton-tabla" title="Editar"><i class="fas fa-edit"></i></a></td>
					<!-- Contenido tabla -->

				</tr>
			</tbody>
		</table>
	</div> 

	<!-- Paginación --> 	
</div>