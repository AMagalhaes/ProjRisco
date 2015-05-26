@extends('app')

@section('content')


<script>
function getValue()
  {
    var c=document.getElementById("confidencialidade");
    var d=document.getElementById("disponibilidade");
    var i=document.getElementById("integridade");
    var x =(c.value*0.6)+(d.value*0.2)+(i.value*0.2);
		document.getElementById("valor").value = parseInt(x);
  }
</script>

<div class="container">

	<h1 class="text-center">Editar Ativo</h1>

	<div id="formAtivo">
		{!! Form::open(['route' => ['activo.update', $activo->id], 'method' => 'PUT']) !!}
		<div class="row">
			<div class="col-md-2">
				<div class="form-group">
					<button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Referência do Ativo"
							data-content="Este campo contém a referência associada a este ativo.">i
					</button>
					{!! Form::label('idActivo', 'Id do Activo:') !!}
					{!! Form::text('idActivo',$activo->id, ['class'=> 'form-control', 'disabled' => true]) !!}
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Nome Ativo"
							data-content="Descreve da forma mais clara possível o nome do ativo a registar para que não haja qualquer dúvida sobre o ativo a que se refere.">i
					</button>
					{!! Form::label('nome', 'Nome:') !!}
					{!! Form::text('nome',$activo->nome, ['class'=> 'form-control']) !!}
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">

					<button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Disponibilidade"
							data-content="Avalia o ativo a registar quanto à sua Disponibilidade numa escala de 1 a 10 em que 1 este ativo não
                            necessita de estar disponivel sempre que seja necessário e 10 significa que é fundamental que o ativo esteja sempre
                              disponivel quando necessário.">i
					</button>
					{!! Form::label('disponibilidade', 'Disponibilidade:') !!}
					{!! Form::select('disponibilidade', [1=>'1',2=>'2',3=>'3',4=>'4',5=>'5',6=>'6',7=>'7',8=>'8',9=>'9',10=>'10'], $activo->disponibilidade, ['class'=>'form-control','onchange'=>'getValue()','onchange'=>'getValue()']) !!}
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-md-6">
				<div class="form-group">
					<button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Localização"
							data-content="Indica a que departamento ou localização física pertence este ativo.">i
					</button>
					{!! Form::label('localizacao', 'Localização:') !!}
					{!! Form::select('localizacao',['', 'DME' => 'DME', 'DMSI' => 'DMSI', 'Escolas' => 'Escolas', 'Refeitório' => 'Refeitório', 'Cozinha' => 'Cozinha'], $activo->localizacao, ['class'=> 'form-control']) !!}
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Confidencialidade"
							data-content="Avalia o ativo a registar quanto à sua confidencialidade numa escala de 1 a 10 em que 1 este ativo não
                            necessita de cuidados em termos e proteção e 10 significa que se deverá ter o maximo de atenção de forma a proteger este
                            ativo quanto à sua confidencialidade.">i
					</button>
					{!! Form::label('confidencialidade', 'Confidencialidade:') !!}
					{!! Form::select('confidencialidade', [1=>'1',2=>'2',3=>'3',4=>'4',5=>'5',6=>'6',7=>'7',8=>'8',9=>'9',10=>'10'], $activo->confidencialidade, ['class'=>'form-control','onchange'=>'getValue()']) !!}
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Valor do Ativo"
							data-content="Este campo apresenta o valor final que o ativo tem segundo as avaliações que introduziste
                            na confidencialidade, disponibilidade e integridade.">i
					</button>
					{!! Form::label('valor', 'Valor:') !!}
					{!! Form::text('valor',$activo->valor, ['class'=> 'form-control','disabled' => true]) !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Tipo de Ativo"
							data-content="Indica qual o tipo de ativo que pertence o mesmo segundo as opções apresentadas.">i
					</button>
					{!! Form::label('tipo', 'Tipo Ativo:') !!}
					{!! Form::select('tipo', ['', 'Hardware' => 'Hardware', 'Software' => 'Software', 'Humano' => 'Humano', 'Utensílios' => 'Utensílios', 'Outros' => 'Outros'], $activo->tipo, ['class'=> 'form-control']) !!}
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Integridade"
							data-content="Avalia o ativo a registar quanto à sua integridade numa escala de 1 a 10 em que 1 este ativo não
                            necessita de cuidados em termos e proteção e 10 significa que se deverá ter o maximo de atenção de forma a proteger este
                            ativo quanto à sua integridade.">i
					</button>
					{!! Form::label('integridade', 'Integridade:') !!}
					{!! Form::select('integridade', [1=>'1',2=>'2',3=>'3',4=>'4',5=>'5',6=>'6',7=>'7',8=>'8',9=>'9',10=>'10'], $activo->integridade , ['class'=>'form-control','onchange'=>'getValue()']) !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Observações"
							data-content="Este campo tem como propósito o registo de eventuais observações pertinentes na
                            ajuda e esclarecimento de informação adicional relevante.">i
					</button>
					{!! Form::label('obs', 'Observação:') !!}
					{!! Form::textarea('obs', $activo->obs, ['class'=> 'form-control']) !!}
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
// Script que permite executar as janelas de informação
<script type="text/javascript">
	$(document).ready(function () {
		$('[data-toggle="popover"]').popover();
	});
</script>

@endsection
