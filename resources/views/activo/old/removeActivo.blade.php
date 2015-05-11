@extends('app')

@section('content')
<div class="container">
	<h1> Remover Activo </h1>
	<hr/>
</div>

<div class="container">
	<table>
		<tr>
			<th>iActivo </th>
			<th> Nome </th>
			<th> Valor </th>
			<th> Observação </th>
			<th> Localização </th>
			<th> Tipo </th>

		</tr>
		@foreach ($activos as $activo)
		<tr align="left">
			<td><a href="{{url('\update',[$activo->id])}}">{{$activo->id}}<a/></td>
			<td><a href="{{action('ListaactivoController@update',[$activo->id])}}">{{$activo->nome}}<a/></td>
			<td><a href="{{action('ListaactivoController@update',[$activo->id])}}">{{$activo->valor}}<a/></td>
			<td><a href="{{action('ListaactivoController@update',[$activo->id])}}">{{$activo->obs}}<a/></td>
			<td><a href="{{action('ListaactivoController@update',[$activo->id])}}">{{$activo->localizacao}}<a/></td>
			<td><a href="{{action('ListaactivoController@update',[$activo->id])}}">{{$activo->tipo}}<a/></td>

		</tr>


		@endforeach

	</table>
	<hr/>
</div>

<hr/>

<div class="container">
	{!! Form::open(['url'=>'removeactivo']) !!}
	<div class="form-group">
		{!! Form::label('idactivo', 'Id do activo a remover:') !!}
		{!! Form::text('idactivo','id do activo a remover', ['class'=> 'form-control']) !!}
		</div>
	<div class="form-group">
		{!! Form::submit('Alterar activo', ['class' => 'btn btn-primary form-control']) !!}
	</div>

	{!! Form::close() !!}
</div>
@stop
