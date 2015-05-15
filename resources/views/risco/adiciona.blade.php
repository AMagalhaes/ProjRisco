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
                    <!-- Contextual button for informational alert messages -->
                    <button type="button" class="btn btn-xs" onclick="alert('Este campo identifica o nome do ativo para o qual vai registar um risco.')">i</button>
                    {!! Form::label('nomeActivo', 'Nome do Activo:') !!}
                    {!! Form::text('nomeActivo', $activo->nome, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <!-- Contextual button for informational alert messages -->
                    <button type="button" class="btn btn-xs" onclick="alert('Este campo destina-se a identificar uma vulnerabilidade que o ativo em causa poderá estar exposto. ex: Humidade, pó...')">i</button>
                    {!! Form::label('vulnerabilidade', 'Vulnerabilidade:') !!}
                    {!! Form::textarea('vulnerabilidade',null, ['class'=> 'form-control']) !!}
                </div>
                <div class="form-group">
                    <!-- Contextual button for informational alert messages -->
                    <button type="button" class="btn btn-xs" onclick="alert('Neste campo deverá ser identificado potenciais ameaças para o risco em que poderá prejudicar o normal funcionamento das suas funções. ex: Inundação, fogo, explosão...')">i</button>
                    {!! Form::label('ameaca', 'Ameaça:') !!}
                    {!! Form::textarea('ameaca',null, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <!-- Contextual button for informational alert messages -->
                    <button type="button" class="btn btn-xs" onclick="alert('Neste campo deve ser identificadas consequências que poderão advir da vulnarabilidade e ameaça identificado anteriormente.')">i</button>
                    {!! Form::label('consequencia', 'Consequencia:') !!}
                    {!! Form::textarea('consequencia',null, ['class'=> 'form-control']) !!}
                </div>

                <div class="form-group">
                    <!-- Contextual button for informational alert messages -->
                    <button type="button" class="btn btn-xs" onclick="alert('Indique a probabilidade da situação descrita neste formulário pode acontecer.')">i</button>
                    {!! Form::label('probabilidade', 'Probabilidade:') !!}
                    {!! Form::select('probabilidade',['', 'Muito Alta','Alta','Normal','Baixa', 'Muito Baixa'], null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <!-- Contextual button for informational alert messages -->
                    <button type="button" class="btn btn-xs" onclick="alert('Classifique  mediante as opções disponíveis o impacto que a concretização do risco identificado neste formulário poderá ter na estrutura e que considere adequado.')">i</button>
                    {!! Form::label('impacto', 'Impacto:') !!}
                    {!! Form::select('impacto',['', 'Elevado','Alto','Médio','Baixo', 'Reduzido'], null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <!-- Contextual button for informational alert messages -->
                    <button type="button" class="btn btn-xs" onclick="alert('Este campo destina-se a que sejam registadas eventuais observações pertinentes na ajuda e esclarecimento de informação adicional relevante..')">i</button>
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
    @endsection
