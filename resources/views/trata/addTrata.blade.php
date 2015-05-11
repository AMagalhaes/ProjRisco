@extends('app')

@section('content')
<hr/>

<div class="container">
	{!! Form::open(['route'=> ['risco.trata.store', $idRisco]]) !!}
<div class="form-group">

	{!! Form::label('descricao', 'Descrição:') !!}
	{!! Form::text('descricao',null, ['class'=> 'form-control']) !!}
	{!! Form::label('idRisco', 'idRisco') !!}
	{!! Form::text('idRisco', $idRisco, ['class'=> 'form-control', 'disabled' => true]) !!}
	{!! Form::label('controlo', 'Controlo:') !!}
	{!! Form::textarea('controlo',null, ['class'=> 'form-control']) !!}
	{!! Form::label('beneficios', 'Beneficios:') !!}
	{!! Form::text('beneficios',null, ['class'=> 'form-control']) !!}

</div>

<div class="form-group">
{!! Form::submit('Add Trata', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}
</div>


@stop
