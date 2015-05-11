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
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('nomeActivo', 'Id do Activo:') !!}
                        {!! Form::text('nomeActivo', $activo->nome, ['class'=> 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('vulnerabilidade', 'Vulnerabilidade:') !!}
                        {!! Form::text('vulnerabilidade',null, ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('ameaca', 'Ameaça:') !!}
                        {!! Form::text('ameaca',null, ['class'=> 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('consequencia', 'Consequencia:') !!}
                        {!! Form::text('consequencia',null, ['class'=> 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('obsFinalR', 'ObsFinal:') !!}
                        {!! Form::textarea('obsFinalR',null, ['class'=> 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('probabilidade', 'Probabilidade:') !!}
                        {!! Form::select('probabilidade',['Baixa','Media','Alta','Muito Alta'], ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('impacto', 'Impacto:') !!}
                        {!! Form::select('impacto',['Baixa','Media','Alta','Muito Alta'], ['class'=> 'form-control']) !!}
                    </div>
                </div
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <input type="submit" class="btn btn-primary btn-block" value="Registar Risco"/>
                {!! Form::close() !!}
    </div>
</div>
@endsection
