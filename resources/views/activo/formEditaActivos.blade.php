@extends('app')

@section('content')
<div class="container">

	<h1 class="text-center">Editar Ativo</h1>

	<div id="formAtivo">
		{!! Form::open(['route' => ['activo.update', $activo->id], 'method' => 'PUT']) !!}
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Código de identificação do ativo.')">i</button>
					{!! Form::label('idActivo', 'Id do Activo:') !!}
					{!! Form::text('idActivo',$activo->id, ['class'=> 'form-control', 'disabled' => true]) !!}
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Identidique de forma clara o ativo que pretende registar.')">i</button>
					{!! Form::label('nome', 'Nome:') !!}
					{!! Form::text('nome',$activo->nome, ['class'=> 'form-control']) !!}
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Avaliação do ativo numa escala de 1 a 100. Esta avaliação deve ter em consideração a importância deste ativo para a estrutura e processos. Também deve ter em atenção a dimensão do impacto negativo em caso de falha.')">i</button>
					{!! Form::label('valor', 'Valor:') !!}
					{!! Form::text('valor',$activo->valor, ['class'=> 'form-control']) !!}
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-md-6">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Identifica a que departamento ou localização física pertence o ativo.')">i</button>
					{!! Form::label('localizacao', 'Localização:') !!}
					{!! Form::select('localizacao',['', 'DME' => 'DME', 'DMSI' => 'DMSI', 'Escolas' => 'Escolas', 'Refeitório' => 'Refeitório', 'Cozinha' => 'Cozinha'], $activo->localizacao, ['class'=> 'form-control']) !!}
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Indique qual o tipo de ativo que pertence o mesmo.')">i</button>
					{!! Form::label('tipo', 'Tipo Ativo:') !!}
					{!! Form::select('tipo', ['', 'Hardware' => 'Hardware', 'Software' => 'Software', 'Humano' => 'Humano', 'Utensílios' => 'Utensílios', 'Outros' => 'Outros'], $activo->tipo, ['class'=> 'form-control']) !!}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Este campo tem como propósito o registo de eventuais observações pertinentes na ajuda e esclarecimento de informação adicional relevante.')">i</button>
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


