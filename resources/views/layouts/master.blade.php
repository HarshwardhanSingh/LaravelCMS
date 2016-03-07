<!DOCTYPE html>
<html>
<head>
	<title>InnFact | Laravel CMS</title>
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->


</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			{{ link_to_route('root','InnFact',null,array('class' => 'navbar-brand')) }}
		</div>
		<ul class="navbar-nav nav navbar-right">
			@if(\Auth::check())
				<li><a href="#">Welcome {{camel_case(Auth::user()->name)}} </a></li>
				<li>{{ link_to_route('articles.create', 'Add Article') }}</li>
				<li>{{ link_to_route('articles.index', 'All Articles') }}</li>
				<li>{{ link_to_route('logout', 'Log Out') }}</li>
			@else
				<li>{{ link_to_route('users.create','Sign Up')}}</li>
				<li>{{ link_to_route('login','Sign In')}}</li>
			@endif
		</ul>
	</div>
</nav>
<div class="container">
	@yield('content')
</div>
</body>
</html>
