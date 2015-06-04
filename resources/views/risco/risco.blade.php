@extends('app')

@section('content')
<div class="container">

	<h1 class="text-center">Editar Risco</h1>

	<p>Este formulário destina-se a regitar todos os riscos identificados para cada ativo, assim como as suas
		vulnerabilidades,
		ameaças e consequências.</p>

	<div id="formAtivo">
		@if(Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message') }}</div>
		@endif

		{!! Form::open(['route' => ['activo.risco.update', $risco->activo_id, $risco->id], 'method' => 'PUT']) !!}
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Este campo identifica o nome do ativo para o qual vai registar um risco.')">i</button>
					{!! Form::label('activo_id', 'Nome do Ativo:') !!}
					{!! Form::text('activo_id',$risco -> activo -> nome, ['class'=> 'form-control', 'disabled' => true]) !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Este campo destina-se a descrever de forma clara a vulnerabilidade que o ativo em causa está exposto. ex: Humidade, pó, bactérias...')">i</button>
					{!! Form::label('vulnerabilidade', 'Vulnerabilidade:') !!}
					{!! Form::textarea('vulnerabilidade',$risco->vulnerabilidade, ['class'=> 'form-control']) !!}
				</div>
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Este campo destina-se a descrever potenciais ameaças para o ativo em função da vulnerabilidade descrita neste formulário e que poderá prejudicar o normal funcionamento das suas funções (ativo). ex: Inundação, fogo, explosão, intoxicação alimentar...')">i</button>
					{!! Form::label('ameaca', 'Ameaça:') !!}
					{!! Form::textarea('ameaca',$risco->ameaca, ['class'=> 'form-control']) !!}
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Este campo destina-se a descrever consequências que poderão advir da vulnarabilidade e ameaça identificadas neste formulário. ex: Imagem da entidade, doenças, integridaade fisica, falha de serviços...')">i</button>
					{!! Form::label('consequencia', 'Consequencia:') !!}
					{!! Form::textarea('consequencia',$risco->consequencia, ['class'=> 'form-control']) !!}
				</div>

				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Indica a probabilidade de acontecer a situação registada neste formulário e que considera ajustada.')">i</button>
					{!! Form::label('probabilidade', 'Probabilidade:') !!}
					{!! Form::select('probabilidade',['1' => 'Muito Baixa', '2' => 'Baixa', '3' => 'Normal', '4' => 'Alta', '5' => 'Muito Alta'], $risco->probabilidade, ['class'=>'form-control']) !!}
				</div>

				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Indica a dimensão do impacto que considera ajustado e que poderá ter a estrutura e o normal funcionamento de todos os processos, caso aconteça a situação registada neste formulário.')">i</button>

					{!! Form::label('impacto', 'Impacto:') !!}
					{!! Form::select('impacto', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5',
                                                                     '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                                                                    ], $risco->impacto, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-xs" onclick="alert('Este campo destina-se a que sejam registadas eventuais observações pertinentes na ajuda e esclarecimento de informação adicional relevante.')">i</button>
					{!! Form::label('obs_final', 'Observações:') !!}
					{!! Form::textarea('obs_final', $risco -> obs_final, ['class'=> 'form-control']) !!}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
				<a class="btn btn-primary btn-block" href="{{ route('risco.index') }}">Voltar</a>
				<input type="submit" class="btn btn-primary btn-block" value="Alterar Risco"/>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
	@endsection