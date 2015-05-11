




@extends('app')

@section('content')
<hr/>

<div class="container">
	{!! Form::open(['route' => ['activo.update', $activo->id], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('idActivo', 'Id do Activo:') !!}
		{!! Form::text('idActivo',$activo->id, ['class'=> 'form-control']) !!}
		{!! Form::label('nome', 'Nome:') !!}
		{!! Form::text('nome',$activo->nome, ['class'=> 'form-control']) !!}
		{!! Form::label('valor', 'Valor:') !!}
		{!! Form::text('valor',$activo->valor, ['class'=> 'form-control']) !!}
		{!! Form::label('obs', 'Observação:') !!}
		{!! Form::text('obs',$activo->obs, ['class'=> 'form-control']) !!}
		{!! Form::label('localizacao', 'Localização:') !!}
		{!! Form::text('localizacao',$activo->localizacao, ['class'=> 'form-control']) !!}
		{!! Form::label('tipo', 'Tipo:') !!}
		{!! Form::text('tipo',$activo->tipo, ['class'=> 'form-control']) !!}
		{!! Form::label('obsFinalA', 'Observações Finais:') !!}
		{!! Form::text('obsFinalA', $activo->obsFinalA, ['class'=> 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Alterar Activo', ['class' => 'btn btn-primary form-control']) !!}
	</div>

	{!! Form::close() !!}
</div>


@stop
