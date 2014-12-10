<div class="container">
@extends('layout.main')
@section('content')

<form action="{{ URL::route('account-sign-in-post') }}" method="post" class="user">
	
	<div class="field">
	<label for="email">Email: </label>
		<input type="text" name="email"{{(Input::old('email')) ? 'value="'. Input::old('email').'"' :''}}>
		@if($errors->has('email'))
		{{ $errors->first('email') }}
		@endif
	</div>
	<div class="field">
		<label for="password">Password:</label>
		<input type="password" name="password">
		@if($errors->has('password'))
		{{ $errors->first('password') }}
		@endif
	</div>
	<div class="field-check">
		<input type="checkbox" name="remember" id="remember">
		<label for="remember">Remember me</label>
	</div>
	<input type="submit" value="Sign in" class="btn btn-success">
	{{ Form::token() }}
</form>
@stop
</div>