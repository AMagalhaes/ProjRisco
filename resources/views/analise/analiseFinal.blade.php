@extends('app')

@section('content')
<div class="container">
	<h1> Analise Final</h1>
	<hr/>

<div class="container">
	<table class="table table-condensed">
		<thead>


			<tr>
        <th class="col-md-3">Nome do Ativo</th>
        <th class="col-md-1">IdRisco</th>
				<th class="col-md-2">Vulnerabilidade</th>
				<th class="col-md-2">Ameaça</th>
        <th class="col-md-1">Probabilidade</th>
        <th class="col-md-1">Impacto</th>
        <th class="col-md-1">Val.Activo</th>
        <th class="col-md-1">Nvl.Risco</th>
        <th class="col-md-1">Categoria</th>
        <th class="col-md-1">Aceitavel</th>






			</tr>

		</thead>

		<tbody>
      @foreach ($activos as $activo)

      <tr>
        <td>{!! $activo->nome !!}</td>
        </tr>
        @foreach ($riscos as $risco)

      @if($activo->id == $risco->activo_id)
      <tr>
        <td>{!! '------' !!}</td>
        <td>{!! 'A',$risco->activo_id,'R',$risco->id !!}</td>
        <td>{!! $risco->ameaca !!}</td>
        <td>{!! $risco->vulnerabilidade !!}</td>
        <td>{!! $risco->probabilidade !!}</td>
        <td>{!! $risco->impacto !!}</td>
        <td>{!! $activo->valor !!}</td>
        <td>{!! ($risco->impacto * $risco->probabilidade * $risco->valor) !!}</td>
			  </td>
			</tr>
      @endif
      @endforeach
      @endforeach
		</tbody>
	</table>
	<hr/>
</div>
@stop
