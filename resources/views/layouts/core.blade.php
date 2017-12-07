<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>

	{!! Minify::stylesheet([
		'/storage/ui/dist/css/bootstrap.min.css',
	]) !!}
</head>
<body>
	
	<main style="margin-top: 50px">
		@yield('app')
	</main>

</body>
</html>