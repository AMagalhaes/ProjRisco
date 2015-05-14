@extends('app')

@section('content')
<div class="container">

	<h1 class="text-center">Registo de Ativos</h1>

	<p>Este formulário destina-se a regitar todos os ativos a considerar. Apenas os ativos que justifiquem
		importância no funcionamento de todos os processos em causa devem ser registados.</p>
	<div id="formAtivo">
		@if(Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message') }}</div>
		@endif
		{!! Form::open(['url'=>'activo']) !!}
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('nome', 'Nome do Activo:') !!}
						{!! Form::text('nome',null, ['class'=> 'form-control']) !!}
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('valor', 'Valor do Ativo:') !!}
						{!! Form::text('valor', null, ['class'=> 'form-control']) !!}
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('localizacao', 'Localização:') !!}
						{!! Form::select('localizacao',['', 'DME' => 'DME', 'DMSI' => 'DMSI', 'Escolas' => 'Escolas', 'Refeitório' => 'Refeitório', 'Cozinha' => 'Cozinha'], null, ['class'=> 'form-control']) !!}
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('tipo', 'Tipo Ativo:') !!}
						{!! Form::select('tipo', ['', 'Hardware' => 'Hardware', 'Software' => 'Software', 'Humano' => 'Humano', 'Utensílios' => 'Utensílios', 'Outros' => 'Outros'], null, ['class'=> 'form-control']) !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						{!! Form::label('obs', 'Observação:') !!}
						{!! Form::textarea('obs',null, ['class'=> 'form-control']) !!}
					</div>
				</div>
			</div>

			<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
			<input type="submit" class="btn btn-primary btn-block" value="Registar Ativo"/>
		{!! Form::close() !!}
	</div>
</div>
@endsection

