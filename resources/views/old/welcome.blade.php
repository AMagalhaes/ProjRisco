<html>
<head>
	<title>Laravel</title>

	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

	<style>
		body {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			color: #B0BEC5;
			display: table;
			font-weight: 100;
			font-family: 'Lato';
		}

		.container {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}



		.title {
			font-size: 96px;
			margin-top: 1px;
		}


		.option {
			font-size: 24px;
		}

	</style>
</head>
<body>
	<div class="container">
				<div class="title">MENU</div>

				<div class="option"><a href="{{ route('activo.create') }}">Adicionar Activo</a></div>
				<div class="option"><a href="{{ route('activo.index') }}">Listar Activo</a></div>

				<div class="option"><a href="{{ route('trata.create') }}" >Adicionar Tratamento</a></div>
				<div class="option"><a href="{{ route('trata.index')}}" >Listar Tratamento</a></div>

				<div class="option"><a href="{{ url('/Calcular')}}">Calcular Risco</a></div>
			</div>
	</div>
</body>
</html>
