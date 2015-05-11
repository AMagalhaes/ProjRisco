@extends('app')

@section('content')
<div class="container">

	<h1 class="text-center">Tratamento do Risco</h1>

	<p>Este formulário destina-se a regitar todos os controlos pensados e implementados para a redução ou remoção
		das vulnerabilidades e consequente ameaça relativamente aos ativos.</p>
	<div id="formAtivo">
		@if(Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message') }}</div>
		@endif
		{!! Form::open(['route'=> ['risco.trata.store', $idRisco]]) !!}
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="name">Ativo</label>
						<input name="name" class="form-control" id="a" type="text">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="tratamento">Tratamento</label>
						<textarea name="tratamento" class="form-control" id="b1" type="text"></textarea>
					</div>
					<div class="form-group">
						<label for="controlo">Controlo</label>
						<textarea name="controlo" class="form-control" id="b2" type="text"></textarea>
					</div>
				</div>
				<br/><br/><br/><br/>
				<div class="col-md-4">
					<div class="form-group">
						<label for="beneficios">Beneficios</label>
						<textarea name="beneficios" class="form-control" id="b3" type="text"></textarea>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="observations">Observações</label>
						<textarea name="observations" class="form-control" id="c3"></textarea>
					</div>
				</div>
			</div
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
			<input type="submit" class="btn btn-primary btn-block" value="Registar Ativo"/>
		{!! Form::close() !!}
	</div>
</div>
@endsection




//////////////


@extends('app')

@section('content')
<hr/>

<div class="container">

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


</div>


@stop
