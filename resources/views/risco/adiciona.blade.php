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

        {!! Form::open(['route'=> ['activo.risco.store', $activo->id]]) !!}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Nome Ativo"
                            data-content="Este campo identifica o nome do ativo para o qual vai registar um risco.">i
                    </button>
                    {!! Form::label('nomeActivo', 'Nome do Activo:') !!}
                    {!! Form::text('nomeActivo', $activo->nome, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Vulnerabilidade"
                            data-content="Este campo destina-se a descrever de forma clara a vulnerabilidade que o ativo em causa está exposto. ex: Humidade, pó,
                            bactérias...">i
                    </button>
                    {!! Form::label('vulnerabilidade', 'Vulnerabilidade:') !!}
                    {!! Form::textarea('vulnerabilidade',null, ['class'=> 'form-control']) !!}
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Nome Ativo"
                            data-content="Este campo destina-se a descrever potenciais ameaças para o ativo em função da vulnerabilidade descrita neste formulário
                            e que poderá prejudicar o normal funcionamento das suas funções (ativo). ex: Inundação, fogo, explosão, intoxicação alimentar...">
                        i
                    </button>
                    {!! Form::label('ameaca', 'Ameaça:') !!}
                    {!! Form::textarea('ameaca',null, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Nome Ativo"
                            data-content="Este campo destina-se a descrever consequências que poderão advir da vulnarabilidade e ameaça identificadas neste
                            formulário. ex: Imagem da entidade, doenças, integridaade fisica, falha de serviços...">i
                    </button>
                    {!! Form::label('consequencia', 'Consequencia:') !!}
                    {!! Form::textarea('consequencia',null, ['class'=> 'form-control']) !!}
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Nome Ativo"
                            data-content="Indica a probabilidade de acontecer a situação registada neste formulário e que considera ajustada.">
                        i
                    </button>
                    {!! Form::label('probabilidade', 'Probabilidade:') !!}
                    {!! Form::select('probabilidade',['', 'Muito Baixa','Baixa','Normal','Alta', 'Muito Alta'], null,
                    ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Nome Ativo"
                            data-content="Indica a dimensão do impacto que considera ajustado e que poderá ter a estrutura e o normal funcionamento de
                            todos os processos, caso aconteça a situação registada neste formulário.">i
                    </button>
                    {!! Form::label('impacto', 'Impacto:') !!}
                    {!! Form::select('impacto',['', 'Reduzido','Baixo','Médio','Alto', 'Elevado'], null,
                    ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Nome Ativo"
                            data-content="Este campo destina-se a que sejam registadas eventuais observações pertinentes na ajuda e esclarecimento de informação
                            adicional relevante.">i
                    </button>
                    {!! Form::label('obsFinalR', 'Observações:') !!}
                    {!! Form::textarea('obsFinalR',null, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ route('activo.index') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Registar Risco"/>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

    @if ($errors -> any())
    <script type='text/javascript'>alert('tem campos por preencher');</script>
    <ul>
        @foreach($errors->all() as $error)
        <?php $myArray = explode(' ', $error); ?>
        <li style="color:red"><font size='3'>Tem de preencher o campo</font> <font
                size='5'><strong>{{$myArray[1]}}</strong></font></li>
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
