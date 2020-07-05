<!DOCTYPE html>
<html>
<head>
	<title>@yield('pageTitle') | Video and text content management system</title>

	<link rel="stylesheet" href="{{ asset('/') }}front-end/bootstrap/css/bootstrap.min.css">

	<script src="{{ asset('/') }}front-end/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/css/style.css">

@yield('headerScriptArea')


</head>
<body>

	<div class="well home-content">
		<a href="{{route('home')}}"><span class="home-heading">Video and text content management system</span></a>
	</div>

@yield('body')


	<div class="footer home-content">
		<span>Developed by: <a href="https://shihab.fromreadingtable.com/" target="_blank">Shihab Uddin Ahmed</a></span>
	</div>	
</body>
</html>	

