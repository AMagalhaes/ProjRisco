
@extends('app')

@section('content')
<hr/>
<div class="container">
   	{!! Form::open(['route'=> ['activo.risco.store', $idActivo]]) !!}
<div class="form-group">

	{!! Form::label('idActivo', 'Id do Activo:') !!}
	{!! Form::text('idActivo', $idActivo, ['class'=> 'form-control', 'disabled' => true]) !!}
	{!! Form::label('vulnerabilidade', 'Vulnerabilidade:') !!}
	{!! Form::text('vulnerabilidade',null, ['class'=> 'form-control']) !!}
	{!! Form::label('ameaca', 'Ameaça:') !!}
	{!! Form::text('ameaca',null, ['class'=> 'form-control']) !!}
	{!! Form::label('consequencia', 'Consequencia:') !!}
	{!! Form::text('consequencia',null, ['class'=> 'form-control']) !!}
	{!! Form::label('probabilidade', 'Probabilidade:') !!}
	{!! Form::select('probabilidade',['Baixa','Media','Alta','Muito Alta'], ['class'=> 'form-control']) !!}
</br>
  {!! Form::label('impacto', 'Impacto:') !!}
	{!! Form::select('impacto',['Baixa','Media','Alta','Muito Alta'], ['class'=> 'form-control']) !!}

  </br>{!! Form::label('obsFinalR', 'ObsFinal:') !!}
	{!! Form::textarea('obsFinalR',null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Add risco', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}
</div>


@stop
