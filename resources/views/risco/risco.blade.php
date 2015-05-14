@extends('app')

@section('content')
<div class="container">

	<h1 class="text-center">Registo de Riscos</h1>

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
					{!! Form::label('id_activo', 'Id do Activo:') !!}
					{!! Form::text('id_activo',$risco->id_activo, ['class'=> 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					{!! Form::label('vulnerabilidade', 'Vulnerabilidade:') !!}
					{!! Form::textarea('vulnerabilidade',$risco->vulnerabilidade, ['class'=> 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('ameaca', 'Ameaça:') !!}
					{!! Form::textarea('ameaca',$risco->ameaca, ['class'=> 'form-control']) !!}
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					{!! Form::label('consequencia', 'Consequencia:') !!}
					{!! Form::textarea('consequencia',$risco->consequencia, ['class'=> 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('probabilidade', 'Probabilidade:') !!}
					{!! Form::select('probabilidade',['', 'Muito Alta','Alta','Normal','Baixa', 'Muito Baixa'], $risco->probabilidade, ['class'=>'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('impacto', 'Impacto:') !!}
					{!! Form::select('impacto',['', 'Elevado','Alto','Médio','Baixo', 'Reduzido'], $risco->impacto, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					{!! Form::label('obsFinalR', 'Obervações:') !!}
					{!! Form::textarea('obsFinalR',null, ['class'=> 'form-control']) !!}
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

