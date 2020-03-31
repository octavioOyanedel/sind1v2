<div>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb mb-4">

			<li class="breadcrumb-item active"><b>{{ $titulo }}</b></li>

			@foreach (obtenerEnlacesAdministracion($enlaces) as $enlace => $ruta)
				<li class="breadcrumb-item"><a href="{{ $ruta }}">{{ $enlace }}</a></li>
			@endforeach

		</ol>
	</nav>

		<!-- Boón agregar elemento -->
	<p class="h4 mb-4">{{ $tituloTabla }}
		<a class="btn btn-green btn-sm float-right mt-0 mr-0" title='Agregar'><i class="fas fa-plus"></i></a>
	</p>	
	
</div>