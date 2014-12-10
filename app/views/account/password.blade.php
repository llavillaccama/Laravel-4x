<div class="container">
	@extends('layout.main')

	@section('content')

	<form action="" action="{{ URL::route('account-change-password-post') }}" method="post" class="user">
		<div class="field">
			<label for="">Old password:</label>
			<input type="password" name="old_password">
			@if($errors->has('old_password'))
			{{ $errors->first('old_password') }}
			@endif
		</div>
		<div class="field">
			<label for="">New password:</label>
			<input type="password" name="password">
			@if($errors->has('password'))
			{{ $errors->first('password') }}
			@endif

		</div>
		<div class="field">
			<label for="">Repeat New password:</label>
			<input type="password" name="password_again">
			@if($errors->has('password_again'))
			{{ $errors->first('password_again') }}
			@endif
		</div>
		<input type="submit" value="change Password" class="btn btn-success">
		{{ Form::token() }}
	</form>
	@stop
</div>