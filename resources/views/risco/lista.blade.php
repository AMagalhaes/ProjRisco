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
				<th>Ameaça</th>
				<th >Probabilidade</th>
				<th >Impacto</th>
				<th class="text-center">
					Ações
				</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($riscos as $risco)
				<tr>
					<td>{{$risco->activo->nome}}</td>
					<td>{{$risco->ameaca}}</td>
					@if($risco->probabilidade == 1)
					<td>{!! 'Muito Baixa' !!}</td>
					@endif
					@if($risco->probabilidade == 2)
					<td>{!! 'Baixa' !!}</td>
					@endif
					@if($risco->probabilidade == 3)
					<td>{!! 'Normal' !!}</td>
					@endif
					@if($risco->probabilidade == 4)
					<td>{!! 'Alta' !!}</td>
					@endif
					@if($risco->probabilidade == 5)
					<td>{!! 'Muito Alta' !!}</td>
					@endif

					@if($risco->impacto == 1)
					<td>{!! 'Reduzido' !!}</td>
					@endif
					@if($risco->impacto == 2)
					<td>{!! 'Baixo' !!}</td>
					@endif
					@if($risco->impacto == 3)
					<td>{!! 'Medio' !!}</td>
					@endif
					@if($risco->impacto == 4)
					<td>{!! 'Alto' !!}</td>
					@endif
					@if($risco->impacto == 5)
					<td>{!! 'Muito Alta' !!}</td>
					@endif

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
