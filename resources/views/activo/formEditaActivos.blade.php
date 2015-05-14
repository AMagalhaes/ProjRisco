@extends('app')

@section('content')
<div class="container">

	<h1 class="text-center">Editar Ativo</h1>

	<div id="formAtivo">
		{!! Form::open(['route' => ['activo.update', $activo->id], 'method' => 'PUT']) !!}
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					{!! Form::label('idActivo', 'Id do Activo:') !!}
					{!! Form::text('idActivo',$activo->id, ['class'=> 'form-control', 'disabled' => true]) !!}
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					{!! Form::label('nome', 'Nome:') !!}
					{!! Form::text('nome',$activo->nome, ['class'=> 'form-control']) !!}
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					{!! Form::label('valor', 'Valor:') !!}
					{!! Form::text('valor',$activo->valor, ['class'=> 'form-control']) !!}
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('localizacao', 'Localização:') !!}
					{!! Form::select('localizacao',['', 'DME' => 'DME', 'DMSI' => 'DMSI', 'Escolas' => 'Escolas', 'Refeitório' => 'Refeitório', 'Cozinha' => 'Cozinha'], $activo->localizacao, ['class'=> 'form-control']) !!}
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('tipo', 'Tipo Ativo:') !!}
					{!! Form::select('tipo', ['', 'Hardware' => 'Hardware', 'Software' => 'Software', 'Humano' => 'Humano', 'Utensílios' => 'Utensílios', 'Outros' => 'Outros'], $activo->tipo, ['class'=> 'form-control']) !!}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('obs', 'Observação:') !!}
					{!! Form::textarea('obs',$activo->obs, ['class'=> 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
			<a class="btn btn-primary btn-block" href="{{ route('activo.index') }}">Voltar</a>
			{!! Form::submit('Alterar Activo', ['class' => 'btn btn-primary form-control']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection


