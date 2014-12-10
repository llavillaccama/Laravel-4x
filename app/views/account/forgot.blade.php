<div class="container">
@extends('layout.main')

@section('content')
<form action="{{URL::route('account-forgot-password-post') }}" method="post" class="user">
	<div class="field">
	<label for="email">Email: </label>
		<input type="text" name="email"{{(Input::old('email')) ? 'value="'. e(Input::old('email')) .'"' :''}}>
		@if($errors->has('email'))
		{{ $errors->first('email') }}
		@endif
	</div>

	


	<input type="submit" value="Recover" class="btn btn-success">
	{{ Form::token()}}
</form>
@stop
</div>