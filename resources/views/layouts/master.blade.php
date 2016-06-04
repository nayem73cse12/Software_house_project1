<!DOCTYPE html>
<html>
	<head>
		<title>Project1</title>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	</head>

	<body>
	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>
	</body>
</html>