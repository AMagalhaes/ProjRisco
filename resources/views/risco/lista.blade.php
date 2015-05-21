@extends('app')

@section('content')
<div class="container">
	<div class="page-header">
  	<h1>Riscos</h1>
	</div>

	@if (Session::has('message'))
	<div class="alert alert-danger">
		{{Session::get('message')}}
	</div>
	@endif

	<table class="table">
		<thead>
			<tr>
				<th>Nome Activo</th>
				<th>Vulnerabilidade</th>
				<th>Ameaça</th>
				<th class="text-center">Probabilidade</th>
				<th class="text-center">Impacto</th>
				<th class="text-center">
					Ações
				</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($riscos as $risco)
				<tr>
					<td>{{$risco->activo->nome}}</td>
					<td>{{$risco->vulnerabilidade}}</td>
					<td>{{$risco->ameaca}}</td>
					<td class="text-center">{{$risco->probabilidade}}</td>
					<td class="text-center">{{$risco->impacto}}</td>
						<td class="text-center">
							{!! Form::open(array('route' => array('activo.risco.destroy', $risco->activo_id, $risco->id), 'method' => 'delete')) !!}
								<!-- View Btn -->
								<a class="btn btn-primary" href="{{ route('risco.show', [$risco->id]) }}">Ver</a>

								<!-- Edit Btn -->
								<a class="btn btn-warning" href="{{route('activo.risco.edit',[$risco->activo_id, $risco->id])}}">Editar</a>

								<!-- Add Btn -->
								<a class="btn btn-success" href="{{route('risco.trata.create',[$risco->id])}}">Acidionar Controlo</a>
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
