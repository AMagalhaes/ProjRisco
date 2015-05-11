@extends('app')

@section('content')
<hr/>

<div class="container">
	{!! Form::open(['url'=>'activo']) !!}
<div class="form-group">

	{!! Form::label('nome', 'Nome do Activo:') !!}
	{!! Form::text('nome',null, ['class'=> 'form-control']) !!}
	{!! Form::label('valor', 'Valor do activo:') !!}
	{!! Form::select('valor',[1,2,3,4,5], ['class'=> 'form-control']) !!}
</br>
	{!! Form::label('obs', 'Observação:') !!}
	{!! Form::textarea('obs',null, ['class'=> 'form-control']) !!}
	{!! Form::label('localizacao', 'Localização:') !!}
	{!! Form::text('localizacao',null, ['class'=> 'form-control']) !!}
	{!! Form::label('tipo', 'Tipo:') !!}
	{!! Form::text('tipo',null, ['class'=> 'form-control']) !!}
	{!! Form::label('obs_final', 'Observação Final:') !!}
	{!! Form::textarea('obs_final',null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Add Activo', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}
</div>


@stop
