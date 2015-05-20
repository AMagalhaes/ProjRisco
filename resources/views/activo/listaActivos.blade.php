@extends('app')

@section('content')
<div class="container">
	<h1> Activos</h1>
	<hr/>
</div>




<h3 > Fazer clear aos botões porque inflr+uencia um ao outro ao depois de filtrar</h3>




<div class="container">
    {!! Form::open(['route' => ['activo.index'], 'method' => 'GET']) !!}
    <div>
        <div class="form-group">
            {!! Form::label('localizacao', 'Localização:') !!}
						{!! Form::select('localizacaoFilter',['Todos', 'DME' => 'DME', 'DMSI' => 'DMSI', 'Escolas' => 'Escolas', 'Refeitório' => 'Refeitório', 'Cozinha' => 'Cozinha'], ['class'=> 'form-control']) !!}

            <button class="btn btn-primary btn-small" type="submit">Filtrar</button>

            {!! Form::label('tipo', 'Tipo:') !!}
						{!! Form::select('tipoFilter',['Todos', 'Hardware' => 'Hardware', 'Software' => 'Software', 'Humano' => 'Humano', 'Utensílios' => 'Utensílios', 'Outros' => 'Outros'], ['class'=> 'form-control']) !!}

            <button class="btn btn-primary btn-small" type="submit">Filtrar</button>
        </div>
    </div>

    {!! Form::close() !!}
</div>
<div class="container">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th class="col-md-3">Nome do Ativo</th>
				<th class="col-md-2">Localização do Ativo</th>
				<th class="col-md-1">Tipo de Ativo</th>
				<th class="col-md-1, text-center">Val. do Ativo</th>
				<th class="text-center">
					Ações
				</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($activos as $activo)
			<tr>
				<td>{{$activo->nome}}</td>
				<td>{{$activo->localizacao}}</td>
				<td>{{$activo->tipo}}</td>
				<td class="text-center">{{$activo->valor}}</td>
					<td class="text-center">
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
