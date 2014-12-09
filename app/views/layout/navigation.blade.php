<nav>
	<ul>
		@if(Auth::check())
		<li><a href="{{ URL::route('account-change-password') }}" class="btn btn-primary">Change password</a></li>
		@else
		<li><a href="{{ URL::route('account-create') }}" class="btn btn-primary">Create an account</a></li>
		<li><a href="{{ URL::route('account-forgot-password') }}" class="btn btn-primary">Forgot password</a></li>
		@endif
	</ul>
</nav>
