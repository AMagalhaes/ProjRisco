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
						<!-- Contextual button for informational alert messages -->
						<button type="button" class="btn btn-xs" onclick="alert('Identidique de forma clara o ativo que pretende registar.')">i</button>
						{!! Form::label('nome', 'Nome do Activo:') !!}
						{!! Form::text('nome',null, ['class'=> 'form-control']) !!}
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<!-- Contextual button for informational alert messages -->
						<button type="button" class="btn btn-xs" onclick="alert('Avaliação do ativo numa escala de 1 a 100. Esta avaliação deve ter em consideração a importância deste ativo para a estrutura e processos. Também deve ter em atenção a dimensão do impacto negativo em caso de falha.')">i</button>
						{!! Form::label('valor', 'Valor do Ativo:') !!}
						{!! Form::text('valor', null, ['class'=> 'form-control']) !!}
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<!-- Contextual button for informational alert messages -->
						<button type="button" class="btn btn-xs" onclick="alert('Identifica a que departamento ou localização física pertence o ativo.')">i</button>
						{!! Form::label('localizacao', 'Localização:') !!}
						{!! Form::select('localizacao',['', 'DME' => 'DME', 'DMSI' => 'DMSI', 'Escolas' => 'Escolas', 'Refeitório' => 'Refeitório', 'Cozinha' => 'Cozinha'], null, ['class'=> 'form-control']) !!}
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<!-- Contextual button for informational alert messages -->
						<button type="button" class="btn btn-xs" onclick="alert('Indique qual o tipo de ativo que pertence o mesmo.')">i</button>
						{!! Form::label('tipo', 'Tipo Ativo:') !!}
						{!! Form::select('tipo', ['', 'Hardware' => 'Hardware', 'Software' => 'Software', 'Humano' => 'Humano', 'Utensílios' => 'Utensílios', 'Outros' => 'Outros'], null, ['class'=> 'form-control']) !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<!-- Contextual button for informational alert messages -->
						<button type="button" class="btn btn-xs" onclick="alert('Este campo tem como propósito o registo de eventuais observações pertinentes na ajuda e esclarecimento de informação adicional relevante.')">i</button>
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

