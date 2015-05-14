@extends('app')

@section('content')
<div class="container">
	<div class="page-header">
  	<h1>Riscos</h1>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th>Nome Activo</th>
				<th>Vulnerabilidade</th>
				<th>Ameaça</th>
				<th>Probabilidade</th>
				<th>Impacto</th>
				<th>
					Ações
				</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($riscos as $risco)
				<tr>
					<td>{{$risco->nome}}</td>
					<td>{{$risco->vulnerabilidade}}</td>
					<td>{{$risco->ameaca}}</td>
					<td>{{$risco->probabilidade}}</td>
					<td>{{$risco->impacto}}</td>
						<td>
							{!! Form::open(array('route' => array('activo.risco.destroy', $risco->activo_id, $risco->id), 'method' => 'delete')) !!}
								<!-- View Btn -->
								<a class="btn btn-primary" href="{{ route('risco.show', [$risco->id]) }}">Ver</a>

								<!-- Edit Btn -->
								<a class="btn btn-warning" href="{{route('activo.risco.edit',[$risco->activo_id, $risco->id])}}">Editar</a>

								<!-- Add Btn -->
								<a class="btn btn-success" href="{{route('risco.trata.create',[$risco->id])}}">Acidionar Tratamento</a>
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
