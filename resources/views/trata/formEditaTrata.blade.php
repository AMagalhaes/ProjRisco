




@extends('app')

@section('content')
<hr/>

<div class="container">
	{!! Form::open(['route' => ['trata.update', $trata->id], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('idTrata', 'Id do Activo:') !!}
		{!! Form::text('idTrata',$trata->id, ['class'=> 'form-control']) !!}
		{!! Form::label('descricao', 'Descriçao:') !!}
		{!! Form::text('descricao',$trata->descricao, ['class'=> 'form-control']) !!}
		{!! Form::label('idRisco', 'IdRisco:') !!}
		{!! Form::text('idRisco',$trata->idRisco, ['class'=> 'form-control']) !!}
		{!! Form::label('controlo', 'Controlo:') !!}
		{!! Form::text('controlo',$trata->controlo, ['class'=> 'form-control']) !!}
		{!! Form::label('beneficios', 'Beneficios:') !!}
		{!! Form::text('beneficios',$trata->beneficios, ['class'=> 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Alterar TRatamento', ['class' => 'btn btn-primary form-control']) !!}
	</div>

	{!! Form::close() !!}
</div>


@stop
