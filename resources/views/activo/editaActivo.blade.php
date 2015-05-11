@extends('app')

@section('content')
<div class="container">
	<h1> Activos</h1>
	<hr/>
</div>

<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#ID</th>
				<th>Nome</th>
				<th>Valor</th>
				<th>Observação</th>
				<th>Localização</th>
				<th>Tipo</th>
				<th>obsFinal</th>
				<th>
					Ações
				</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($activos as $activo)
			<tr>
				<td>{{$activo->id}}</td>
				<td>{{$activo->nome}}</td>
				<td>{{$activo->valor}}</td>
				<td>{{$activo->obs}}</td>
				<td>{{$activo->localizacao}}</td>
				<td>{{$activo->tipo}}</td>
				<td>{{$activo->obs_final}}</td>
					<td>
						{!! Form::open(['route' => array('activo.destroy', $activo->id), 'method' => 'delete']) !!}
							<!-- Show -->
							<a href="{{ route('activo.show', [$activo->id]) }}" class="btn btn-primary">Ver</a>

							<!-- Edit -->
							<a href="{{ route('activo.edit', [$activo->id]) }}" class="btn btn-warning">Editar</a>
							<!-- Add Risco -->
							<a href="{{ route('activo.risco.create', [$activo->id]) }}" class="btn btn-success">Add Risco</a>

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
