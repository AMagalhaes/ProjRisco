@extends('app')

@section('content')
<div class="container">

    <h1 class="text-center">Editar controlo</h1>

    <p>Este formulário destina-se a regitar todos os controlos pensados e implementados para a redução ou remoção
        das vulnerabilidades e consequente ameaça relativamente aos ativos.</p>

    <div id="formAtivo">
        @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        {!! Form::open(['route' => ['trata.update', $trata->id], 'method' => 'PUT']) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Identificação do risco"
                            data-content="Identifica o ativo para o qual foi criado este controlo.">i
                    </button>
                    {!! Form::label('idTrata', 'Activo:') !!}
                    {!! Form::text('idTrata',$trata->risco->activo->nome, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Identificação do risco"
                            data-content="Identifica o risco para o qual foi criado este controlo.">i
                    </button>
                    {!! Form::label('risco_id', 'Risco:') !!}
                    {!! Form::text('risco_id',$trata->risco->vulnerabilidade, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Identificação do risco"
                            data-content="Aqui deves descrever o que vais fazer para reduzir o risco em causa e que se está a
                            abordar neste formulário.">i
                    </button>
                    {!! Form::label('descricao', 'Descriçao:') !!}
                    {!! Form::textarea('descricao',$trata->descricao, ['class'=> 'form-control']) !!}
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Controlos a executar"
                            data-content="Aqui será registado os controlos a realizar de forma a controlar, reduzir ou minimizar
                            o risco.">i
                    </button>
                    {!! Form::label('controlo', 'Controlo:') !!}
                    {!! Form::textarea('controlo',$trata->controlo, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <br/><br/><br/><br/>

            <div class="col-md-4">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Beneficios"
                            data-content="Neste campo deves registar os beneficios que poderão advir das medidas tomadas para
                            controlar o risco aqui identificado.">i
                    </button>
                    {!! Form::label('beneficios', 'Beneficios:') !!}
                    {!! Form::textarea('beneficios',$trata->beneficios, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="popover" title="Observações"
                            data-content="Este campo tem como propósito o registo de eventuais observações pertinentes na
                            ajuda e esclarecimento de informação adicional relevantes.">i
                    </button>
                    {!! Form::label('observações', 'Observações:') !!}
                    {!! Form::textarea('obs_final', $trata->obs_final, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
        <a class="btn btn-primary btn-block" href="{{ URL::previous() }}">Voltar</a>
        <input type="submit" class="btn btn-primary btn-block" value="Alterar Controlo"/>
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
