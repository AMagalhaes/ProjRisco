@extends('app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Controlos</h1>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th class="col-lg-1, text-center">Ref.Risco</th>
            <th class="col-lg-4">Descrição</th>
            <th class="col-lg-4">Controlo</th>
            <th class="col-lg-3, text-center">
                Ações
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tratams as $trata)
        <tr>
            <td class="text-center">{{$trata->risco_id}}</td>
            <td>{{$trata->descricao}}</td>
            <td>{{$trata->controlo}}</td>

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
    <hr/>
</div>
@stop
