@extends('app')

@section('content')
<div class="container">

    <h1 class="text-center">Editar controlos</h1>

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
                    {!! Form::label('idTrata', 'Activo:') !!}
                    {!! Form::text('idTrata',$trata->risco->activo->nome, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('risco_id', 'Risco:') !!}
                    {!! Form::text('risco_id',$trata->risco->vulnerabilidade, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('descricao', 'Descriçao:') !!}
                    {!! Form::textarea('descricao',$trata->descricao, ['class'=> 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('controlo', 'Controlo:') !!}
                    {!! Form::textarea('controlo',$trata->controlo, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <br/><br/><br/><br/>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('beneficios', 'Beneficios:') !!}
                    {!! Form::textarea('beneficios',$trata->beneficios, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
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
@endsection
