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
                    {!! Form::label('activo_id', 'Id do Activo:') !!}
                    {!! Form::text('activo_id',$risco->activo_id, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('vulnerabilidade', 'Vulnerabilidade:') !!}
                    {!! Form::textarea('vulnerabilidade',$risco->vulnerabilidade, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('ameaca', 'Ameaça:') !!}
                    {!! Form::textarea('ameaca',$risco->ameaca, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('consequencia', 'Consequencia:') !!}
                    {!! Form::textarea('consequencia',$risco->consequencia, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('probabilidade', 'Probabilidade:') !!}
                    {!! Form::select('probabilidade',['', 'Muito Alta','Alta','Normal','Baixa', 'Muito Baixa'], $risco->probabilidade, ['class'=>'form-control', 'disabled' => true]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('impacto', 'Impacto:') !!}
                    {!! Form::select('impacto',['', 'Elevado','Alto','Médio','Baixo', 'Reduzido'], $risco->impacto, ['class'=>'form-control', 'disabled' => true]) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('obsFinalR', 'Obervações:') !!}
                    {!! Form::textarea('obsFinalR',null, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>

        <div class="container">
          <h2> Controlos deste risco</h2>
          <hr/>

        <div class="container">
          <table class="table table-condensed">
            <thead>


              <tr>
                <th class="col-md-1, text-center">Id Risco</th>
                <th class="col-md-5">Descrição</th>
                <th class="col-md-4">Controlo</th>
                <th class="text-center">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tratams as $trata)
              <tr>
                <td  class="text-center">{!! $trata->risco_id !!}</td>
                      <td>{!! $trata->descricao !!}</td>
                      <td>{!! $trata->controlo !!}</td>
                      <td class="text-center">
                          {!! Form::open(['route' => array('trata.destroy', $trata->id), 'method' => 'delete']) !!}
                          <!-- Show -->
                          <a href="{{ route('trata.show', [$trata->id]) }}" class="btn btn-primary">Ver</a>

                          <!-- Edit -->
                          <a href="{{ route('trata.edit', [$trata->id]) }}" class="btn btn-warning">Editar</a>

                          <button type="submit" class="btn btn-danger">Remover</button>
                          {!! Form::close() !!}
                      </td>
                    </tr>
              @endforeach
            </tbody>

          </table>
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
