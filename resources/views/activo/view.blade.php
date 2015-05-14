@extends('app')

@section('content')
<div class="container">

    <h1 class="text-center">Detalhes do Ativos</h1>

    <div id="formAtivo">
        {!! Form::open(['route' => ['activo.update', $activo->id], 'method' => 'PUT']) !!}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('idActivo', 'Id do Activo:') !!}
                    {!! Form::text('idActivo',$activo->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome',$activo->nome, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('valor', 'Valor:') !!}
                    {!! Form::text('valor',$activo->valor, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('localizacao', 'Localização:') !!}
                    {!! Form::text('localizacao',$activo->localizacao, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo:') !!}
                    {!! Form::text('tipo',$activo->tipo, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('obs', 'Observação:') !!}
                    {!! Form::textarea('obs',$activo->obs, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
        <a class="btn btn-primary btn-block" href="{{ route('activo.index') }}">Voltar</a>
        {!! Form::close() !!}
    </div>
</div>
@endsection
