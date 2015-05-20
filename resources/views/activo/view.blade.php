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

        <div class="container">
        	<h1> Riscos deste Activo</h1>
        	<hr/>

        <div class="container">
        	<table class="table table-condensed">
        		<thead>


        			<tr>
                <th class="col-md-3">Vulnerabilidade</th>
                <th class="col-md-1">Ameaça</th>
        				<th class="col-md-2">Probabilidade</th>
                <th class="col-md-1">Impacto</th>
                <th class="col-md-1">Obs.</th>
                <th class="col-md-1">Categoria</th>
        			</tr>
        		</thead>
            <tbody>
              @foreach ($riscos as $risco)
              <tr>
                      <td>{!! $risco->vulnerabilidade !!}</td>
                      <td>{!! $risco->ameaca !!}</td>
                      <td>{!! $risco->probabilidade !!}</td>
                      <td>{!! $risco->impacto !!}</td>
                      <td>{!! $risco->obs_final !!}</td>
                      <td>{!! $risco->cat_risco !!}</td>
                    </tr>
              @endforeach
            </tbody>

          </table>

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
        <a class="btn btn-primary btn-block" href="{{ route('activo.index') }}">Voltar</a>
        {!! Form::close() !!}
    </div>
</div>
@endsection
