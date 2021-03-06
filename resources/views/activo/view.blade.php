@extends('app')

@section('content')
<div class="container">

    <h1 class="text-center">Detalhes do Ativos</h1>

    <div id="formAtivo">
        {!! Form::open(['route' => ['activo.update', $activo->id], 'method' => 'PUT']) !!}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('idActivo', 'Id do Ativo:') !!}
                    {!! Form::text('idActivo',$activo->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome',$activo->nome, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('valor', 'Valor:') !!}
                    {!! Form::text('valor',$activo->valor, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('localizacao', 'Localização:') !!}
                    {!! Form::text('localizacao',$activo->localizacao, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo:') !!}
                    {!! Form::text('tipo',$activo->tipo, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('obs', 'Observação:') !!}
                    {!! Form::textarea('obs',$activo->obs, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>

        <div class="container">
        	<h2> Riscos deste Ativo</h2>    	
              	<hr/>        	
		<div class="text-right">        
        		<!-- Add Risco -->
			<a href="{{ route('activo.risco.create', [$activo->id]) }}" class="btn btn-success">Add Risco</a>	
		</div>
        <div class="container">
        	<table class="table table-condensed">
        		<thead>


        			<tr>
                <th class="col-md-3">Ameaça</th>
                <th class="col-md-3">Vulnerabilidade</th>
        	<th class="col-md-1, text-center">Probabilidade</th>
                <th class="col-md-1, text-center">Impacto</th>
                <th class="col-md-4, text-center">Ações</th>
        			</tr>
        		</thead>
            <tbody>
              @foreach ($riscos as $risco)
	              <tr>
	                <td>{!! $risco->ameaca !!}</td>
	                <td>{!! $risco->vulnerabilidade !!}</td>
	                @if($risco->probabilidade == 1)
				<td class="text-center">{!! 'Muito Baixa' !!}</td>
			@endif
			@if($risco->probabilidade == 2)
				<td class="text-center">{!! 'Baixa' !!}</td>
			@endif
			@if($risco->probabilidade == 3)
				<td class="text-center">{!! 'Normal' !!}</td>
			@endif
			@if($risco->probabilidade == 4)
				<td class="text-center">{!! 'Alta' !!}</td>
			@endif
			@if($risco->probabilidade == 5)
				<td class="text-center">{!! 'Muito Alta' !!}</td>
			@endif
			@if($risco->impacto > 0 && $risco->impacto <= 3)
				<td class="text-center">{!! 'Baixo' !!}</td>
			@endif
			@if($risco->impacto > 3 && $risco->impacto <= 7)
				<td class="text-center">{!! 'Médio' !!}</td>
			@endif
			@if($risco->impacto > 7 && $risco->impacto <= 10)
				<td class="text-center">{!! 'Alto' !!}</td>
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
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
        <a class="btn btn-primary btn-block" href="{{ route('activo.index') }}">Voltar</a>
        {!! Form::close() !!}
    </div>
</div>
@endsection