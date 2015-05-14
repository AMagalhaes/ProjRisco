@extends('app')

@section('content')
<div class="container">
	<h1>Tratamentos</h1>
	<hr/>
</div>

<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Descrição</th>
				<th>idRisco</th>
				<th>Controlo</th>
				<th>Beneficios</th>
				<th>
					Ações
				</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tratams as $trata)
			<tr>
				<td>{{$trata->descricao}}</td>
				<td>{{$trata->idRisco}}</td>
				<td>{{$trata->controlo}}</td>
				<td>{{$trata->beneficios}}</td>

					<td>
						{!! Form::open(['route' => array('trata.destroy', $trata->id), 'method' => 'delete']) !!}
							<!-- Show -->
							<a href="{{ route('trata.show', [$trata->id]) }}" class="btn btn-primary">Ver</a>

							<!-- Edit -->
							<a href="{{ route('trata.edit', [$trata->id]) }}" class="btn btn-warning">Editar</a>

							<button type="submit" class="btn btn-danger">Remover</button>
						{!! Form::close() !!}
					</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr/>
</div>
@stop
