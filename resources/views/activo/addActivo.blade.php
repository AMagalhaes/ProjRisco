@extends('app')

@section('content')


<script>
    function getValue() {
        var c = document.getElementById("confidencialidade");
        var d = document.getElementById("disponibilidade");
        var i = document.getElementById("integridade");
        var x = (c.value * 0.4) + (d.value * 0.4) + (i.value * 0.2);
        document.getElementById("valor").value = parseInt(x);
    }
</script>


<div class="container">
    <h1 class="text-center">Registo de Ativos</h1>

    <p>Este formulário destina-se a regitar todos os ativos a considerar. Apenas os ativos que justifiquem
        importância no funcionamento de todos os processos em causa devem ser registados.</p>

    <div id="formAtivo">
        @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <!--  {!! Form::open(['url'=>'activo']) !!} -->
        {!! Form::open(['route'=> ['activo.store']]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Nome Ativo"
                            data-content="Descreve da forma mais clara possível o nome do ativo a registar para que não
                            haja qualquer dúvida sobre o ativo a que se refere.">i
                    </button>
                    {!! Form::label('nome', 'Nome do Ativo:') !!}
                    {!! Form::text('nome',null, ['class'=> 'form-control']) !!}
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
                    {!! Form::select('disponibilidade',
                    [1=>'1',2=>'2',3=>'3',4=>'4',5=>'5',6=>'6',7=>'7',8=>'8',9=>'9',10=>'10'], null,
                    ['class'=>'form-control','onchange'=>'getValue()']) !!}
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
                    {!! Form::select('localizacao',[
                    'DMGE' => 'DMGE',
                    'DMSI' => 'DMSI',
                    'Escolas' => 'Escolas',
                    'Cozinhas' => 'Cozinhas',
                    'Refeitorios' => 'Refeitórios',
                    'Outro' => 'Outro'],

                    null, ['class'=> 'form-control']) !!}
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
                    {!! Form::select('confidencialidade',
                    [1=>'1',2=>'2',3=>'3',4=>'4',5=>'5',6=>'6',7=>'7',8=>'8',9=>'9',10=>'10'], null,
                    ['class'=>'form-control','onchange'=>'getValue()']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Valor do Ativo"
                            data-content="Este campo apresenta o valor final que o ativo tem segundo as avaliações que introduziste
                            na confidencialidade, disponibilidade e integridade.">i
                    </button>
                    {!! Form::label('valor', 'Valor do Ativo:') !!}
                    {!! Form::text('valor', 1, ['class'=> 'form-control', 'disabled' =>true]) !!}
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
                    {!! Form::select('tipo', [
                    'Infra-estrutura' => 'Infra-estrutura',
                    'Hardware' => 'Hardware',
                    'Software' => 'Software',
                    'Humano' => 'Humano',
                    'Outros' => 'Outros'],

                    null, ['class'=> 'form-control']) !!}
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
                    {!! Form::select('integridade',
                    [1=>'1',2=>'2',3=>'3',4=>'4',5=>'5',6=>'6',7=>'7',8=>'8',9=>'9',10=>'10'], null,
                    ['class'=>'form-control','onchange'=>'getValue()']) !!}
                </div>
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
                {!! Form::textarea('obs',null, ['class'=> 'form-control']) !!}
            </div>
        </div>
    </div>
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
    <input type="submit" class="btn btn-primary btn-block" value="Registar Ativo"/>
    {!! Form::close() !!}
</div>
</div>
@if ($errors -> any())
<script type='text/javascript'>alert('tem campos por preencher');</script>
<ul>
    @foreach($errors->all() as $error)
    <?php $myArray = explode(' ', $error); ?>
    <li style="color:red"><font size='3'>Tem de preencher o campo</font> <font size='5'><strong>{{$myArray[1]}}</strong></font>
    </li>
    @endforeach
</ul>
@endif

// Script que permite executar as janelas de informação
<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
</script>
@endsection
