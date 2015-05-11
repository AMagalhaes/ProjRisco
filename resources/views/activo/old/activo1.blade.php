@extends('app')

@section('content')
<div class="container">
	<h1> Activos</h1>
	<hr/>
</div>

<div class="container">
	<table>
		<tr>
			<th>idActivo</th>
			<th>Nome</th>
			<th>Valor</th>
			<th>Observação</th>
			<th>Localização</th>
			<th>Tipo</th>
			<th>ObsFinal </th>
		</tr>
		@foreach ($activos as $activo)
		<div>
		<tr align="left">
			<td>{{$activo->id}}</td>
			<td>{{$activo->nome}}</td>
			<td>{{$activo->valor}}</td>
			<td>{{$activo->obs}}</td>
			<td>{{$activo->localizacao}}</td>
			<td>{{$activo->tipo}}</td>
			<td>{{$activo->obsFinalA}}</td>
		</tr>
		<d
		@endforeach
	</table>
	<hr/>
</div>
@stop
