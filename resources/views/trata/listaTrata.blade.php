@extends('app')

@section('content')
<div class="container">
	<h1> Tratamentos</h1>
	<hr/>
</div>

<div class="container">
	<table>
		<tr>
			<th>idTratamento </th>
			<th> Descrição </th>
			<th> idRisco </th>
			<th> Controlo </th>
			<th> Beneficios </th>
		</tr>
		@foreach ($tratams as $trata)
		<div>
		<tr align="left">
			<td>{{$trata->id}}</td>
			<td>{{$trata->descricao}}</td>
			<td>{{$trata->idRisco}}</td>
			<td>{{$trata->controlo}}</td>
			<td>{{$trata->beneficios}}</td>
		</tr>
		<d
		@endforeach
	</table>
	<hr/>
</div>
@stop
