<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{{ $titulo }}</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('css/estilos.css') }}
</head>
<body>
	<div class="wrapper">
		<div class="paginacion">
			@foreach ($posts->results as $post)

				<div class="articulo">
					{{ $post->username }}
			    	{{ $post->edad }}
			    	{{ $post->titulo }}
			    </div>

			@endforeach
			<br />
			{{ $posts->links() }}

		</div>
	</div>
</body>
</html>
