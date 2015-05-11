




@extends('app')

@section('content')
<hr/>

<div class="container">
	{!! Form::open(['route' => ['risco.update', $risco->id], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('idRisco', 'Id do Risco:') !!}
		{!! Form::text('idRisco',$risco->id, ['class'=> 'form-control']) !!}
		{!! Form::label('idActivo', 'Id do Activo:') !!}
		{!! Form::text('idActivo',$risco->idActivo, ['class'=> 'form-control']) !!}
		{!! Form::label('vulnerabilidade', 'Vulnerabilidade:') !!}
		{!! Form::text('vulnerabilidade',$risco->vulnerabilidade, ['class'=> 'form-control']) !!}
		{!! Form::label('ameaca', 'Ameaça:') !!}
		{!! Form::text('ameaca',$risco->ameaca, ['class'=> 'form-control']) !!}
		{!! Form::label('consequencia', 'Consequencia:') !!}
		{!! Form::text('consequencia',$risco->consequencia, ['class'=> 'form-control']) !!}
		{!! Form::label('probabilidade', 'Probabilidade:') !!}
		{!! Form::text('probabilidade',$risco->probabilidade, ['class'=> 'form-control']) !!}
		{!! Form::label('impacto', 'Impacto:') !!}
		{!! Form::text('impacto',$risco->impacto, ['class'=> 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Alterar Risco', ['class' => 'btn btn-primary form-control']) !!}
	</div>

	{!! Form::close() !!}
</div>


@stop
