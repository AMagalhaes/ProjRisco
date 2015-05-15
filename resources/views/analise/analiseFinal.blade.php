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

						@if ($risco->cat_risco<41)
						<?php $classe = 'success'; ?>
						@endif

						@if (($risco->cat_risco>40) && ($risco->cat_risco<271))
						<?php $classe = 'active'; ?>
						@endif

						@if (($risco->cat_risco>270) && ($risco->cat_risco<1121))
						<?php $classe = 'warning'; ?>;
						@endif

						@if (($risco->cat_risco>1120) && ($risco->cat_risco<2501))
						<?php $classe = 'danger'; ?>;
						@endif

			      <tr class ="{{ $classe }}" >
			        <td>{!! '------' !!}</td>
			        <td>{!! 'A',$risco->activo_id,'R',$risco->id !!}</td>
			        <td>{!! $risco->ameaca !!}</td>
			        <td>{!! $risco->vulnerabilidade !!}</td>
			        <td>{!! $risco->probabilidade !!}</td>
			        <td>{!! $risco->impacto !!}</td>
			        <td>{!! $activo->valor !!}</td>
			        <td>{!! $risco->cat_risco !!}</td>
							@if(($risco->cat_risco>=0) && ($risco->cat_risco<41))
								<td >{!! 'Aceitavel' !!}</td>
							@endif
							@if(($risco->cat_risco>40) && ($risco->cat_risco<271))
								<td>{!! 'Normal' !!}</td>
							@endif
							@if(($risco->cat_risco>270) && ($risco->cat_risco<1120))
								<td>{!! 'Alto' !!}</td>
							@endif
							@if(($risco->cat_risco>1120) && ($risco->cat_risco<2501))
								<td>{!! 'Critico' !!}</td>
							@endif
							@if(($risco->cat_risco>=0) && ($risco->cat_risco<41))
								<td>{!! 'Sim' !!}</td>
							@endif
							@if(($risco->cat_risco>40) && ($risco->cat_risco<271))
								<td>{!! 'Talvez' !!}</td>
							@endif
							@if(($risco->cat_risco>270) && ($risco->cat_risco<1120))
								<td>{!! 'Não' !!}</td>
							@endif
							@if(($risco->cat_risco>1120) && ($risco->cat_risco<2501))
								<td>{!! 'Não' !!}</td>
							@endif
	    @endif
      @endforeach
      @endforeach
		</tbody>
	</table>
	<hr/>
</div>
@stop
