<!DOCTYPE html>
<html>
<head>
	<title>Admin user</title>
	<body>
	@if(Session::has('global'))
	<p>{{ Session::get('global') }}</p>
	@endif
		@include('layout.navigation')
		@yield('content')
	</body>
</head>
</html>