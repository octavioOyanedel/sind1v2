<div>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
		aria-haspopup="true" aria-expanded="false"> @if ($enlacePrincipal === 'Usuario')
			Hola, Usuario
		@else
			{{ $enlacePrincipal }}
		@endif </a>
		<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
			@foreach (obtenerEnlacesNav($enlacePrincipal) as $nombre => $ruta)
				@if ($nombre === 'Salir')
					<a class="dropdown-item" href="{{ route($ruta) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ $nombre }}</a>
					<form id="logout-form" action="{{ route($ruta) }}" method="POST" style="display: none;">
						@csrf
					</form>
				@else
					<a class="dropdown-item" href="{{ route($ruta) }}">{{ $nombre }}</a>
				@endif
			@endforeach
		</div>
	</li>
</div>