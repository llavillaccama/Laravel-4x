	<ul>
		@if(Auth::check())
		<li><a href="{{ URL::route('account-change-password') }}" class="btn btn-primary">Cambiar Contraseña</a></li>
		@else
		<li><a href="{{ URL::route('account-create') }}" class="btn btn-primary">Crear una cuenta</a></li>
		<li><a href="{{ URL::route('account-forgot-password') }}" class="btn btn-primary">Recuperar contraseña</a></li>
		@endif
	</ul>