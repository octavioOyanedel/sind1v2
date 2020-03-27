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
				<a class="dropdown-item" href="{{ route($ruta) }}">{{ $nombre }}</a>
			@endforeach
		</div>
	</li>
</div>