<div class="container">
	@extends('layout.main')
	@section('content')
	<form action="{{ URL::route('account-create-post') }}" method="post" class="user">
		<div class="field">
			<label for="email">Email:</label>
			<input type="text" name="email" {{ (Input::old('email') ?' value="'. e(Input::old('email')).'"' : '') }}>
			@if($errors->has('email'))
			{{ $errors->first('email') }}
			@endif
		</div>
		<div class="field">
			<label for="username">Username:</label>
			<input type="text" name="username" {{ (Input::old('username') ?' value="'. e(Input::old('username')).'"' : '') }}>
			@if($errors->has('username'))
			{{ $errors->first('username') }}
			@endif
		</div>
		<div class="field">
			<label for="password">Password:</label>
			<input type="password" name="password">
			@if($errors->has('password'))
			{{ $errors->first('password') }}
			@endif
		</div>
		<div class="field">
			<label for="password_again">Password again:</label>
			<input type="password" name="password_again">
			@if($errors->has('password_again'))
			{{ $errors->first('password_again') }}
			@endif
		</div>
		<input type="submit" value="Create Acount" class="btn btn-success">
		{{ Form::token() }}
	</form>
	@stop
</div>