@extends('app')

@section('content')
<div class="container">
	<h1> Remover Risco </h1>
	<hr/>
</div>

<div class="container">
	<table>
		<tr>
			<th>idRisco </th>
			<th> Vulnerabilidade </th>
			<th> Ameaça </th>
			<th> Consequencia </th>
			<th> Probabilidade </th>
			<th> Impacto </th>

		</tr>
		@foreach ($riscos as $risco)
		<tr align="left">
			<td><a href="{{url('\update',[$risco->id])}}">{{$risco->id}}<a/></td>
			<td><a href="{{action('ListaRiscoController@update',[$risco->id])}}">{{$risco->vulnerabilidade}}<a/></td>
			<td><a href="{{action('ListaRiscoController@update',[$risco->id])}}">{{$risco->ameaca}}<a/></td>
			<td><a href="{{action('ListaRiscoController@update',[$risco->id])}}">{{$risco->consequencia}}<a/></td>
			<td><a href="{{action('ListaRiscoController@update',[$risco->id])}}">{{$risco->probabilidade}}<a/></td>
			<td><a href="{{action('ListaRiscoController@update',[$risco->id])}}">{{$risco->impacto}}<a/></td>

		</tr>


		@endforeach

	</table>
	<hr/>
</div>

<hr/>

<div class="container">
	{!! Form::open(['url'=>'removeRisco']) !!}
	<div class="form-group">
		{!! Form::label('idRisco', 'Id do Risco a remover:') !!}
		{!! Form::text('idRisco','id do risco a remover', ['class'=> 'form-control']) !!}
		</div>
	<div class="form-group">
		{!! Form::submit('Alterar Risco', ['class' => 'btn btn-primary form-control']) !!}
	</div>

	{!! Form::close() !!}
</div>		
@stop