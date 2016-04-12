<!DOCTYPE html>
<html>
	<head>
		<title>Project1</title>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	</head>

	<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				@yield('content')
			</div>
		</div>
	</div>
	</body>
</html>