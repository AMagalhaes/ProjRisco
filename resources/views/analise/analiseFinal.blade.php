@extends('app')

@section('content')
<div class="container">
    <h2> Analise dos riscos</h2>
    <hr/>
    <div class="container">
        <table class="table table-condensed">
            <thead>


            <tr>
                <th class="col-md-2">Nome do Ativo</th>
                <th class="col-md-1, text-center">Ref.Risco</th>
                <th class="col-md-3">Ameaça</th>
                <th class="col-md-1, text-center">Probabilidade</th>
                <th class="col-md-2, text-center">Impacto</th>
                <th class="col-md-1, text-center">Val.Activo</th>
                <th class="col-md-1">Nvl.Risco</th>
                <th class="col-md-1">Categoria</th>
                <th class="col-md-1">Aceitavel</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($activos as $activo)

              @if($activo->verificaRisco($activo->id))
                <tr>
                    <td>{!! $activo->nome !!}</td>
                </tr>
                @foreach ($riscos as $risco)

                  @if($activo->id == $risco->activo_id)
                    @if ($risco->cat_risco<=50)
                      <?php $classe = 'sucesso'; ?>
                    @endif

                    @if (($risco->cat_risco>50) && ($risco->cat_risco<=200))
                      <?php $classe = 'ativo'; ?>
                    @endif

                      @if (($risco->cat_risco>200) && ($risco->cat_risco<=300))
                      <?php $classe = 'cuidado'; ?>;
                    @endif

                      @if (($risco->cat_risco>300) && ($risco->cat_risco<=500))
                      <?php $classe = 'perigo'; ?>;
                    @endif

                    <tr>
                        <td>{!! '------' !!}</td>
                        <td class="text-center">{!! 'A',$risco->activo_id,'R',$risco->id !!}</td>
                        <td>{!! $risco->ameaca !!}</td>
                        @if($risco->probabilidade == 1)
                        <td class="text-center">{!! 'Muito baixa' !!}</td>
                        @endif
                        @if($risco->probabilidade == 2)
                        <td class="text-center">{!! 'baixa' !!}</td>
                        @endif
                        @if($risco->probabilidade == 3)
                        <td class="text-center">{!! 'Normal' !!}</td>
                        @endif
                        @if($risco->probabilidade == 4)
                        <td class="text-center">{!! 'Alta' !!}</td>
                        @endif
                        @if($risco->probabilidade == 5)
                        <td class="text-center">{!! 'Muito Alta' !!}</td>
                        @endif

                        @if($risco->impacto > 0 && $risco->impacto <= 3)
                        <td class="text-center">{!! 'Baixo' !!}</td>
                        @endif
                        @if($risco->impacto > 3 && $risco->impacto <= 7)
                        <td class="text-center">{!! 'Médio' !!}</td>
                        @endif
                        @if($risco->impacto > 7 && $risco->impacto <= 10)
                        <td class="text-center">{!! 'Alto' !!}</td>
                        @endif
                     
                        <td class="text-center">{!! $activo->valor !!}</td>
                        <td class="{{ $classe }}">{!! $risco->cat_risco !!}</td>
                        @if(($risco->cat_risco>=0) && ($risco->cat_risco<=50))
                          <td  class="{{ $classe }}">{!! 'Aceitavel' !!}</td>
                        @endif
                        @if(($risco->cat_risco>50) && ($risco->cat_risco<=200))
                          <td  class="{{ $classe }}">{!! 'Normal' !!}</td>
                        @endif
                        @if(($risco->cat_risco>200) && ($risco->cat_risco<=300))
                          <td  class="{{ $classe }}">{!! 'Alto' !!}</td>
                        @endif
                        @if(($risco->cat_risco>300) && ($risco->cat_risco<=500))
                          <td  class="{{ $classe }}">{!! 'Critico' !!}</td>
                        @endif
                        @if(($risco->cat_risco>=0) && ($risco->cat_risco<=50))
                          <td  class="{{ $classe }}">{!! 'Sim' !!}</td>
                        @endif
                        @if(($risco->cat_risco>50) && ($risco->cat_risco<=300))
                          <td  class="{{ $classe }}">{!! 'Talvez' !!}</td>
                        @endif
                        @if(($risco->cat_risco>300) && ($risco->cat_risco<=350))
                          <td  class="{{ $classe }}">{!! 'Não' !!}</td>
                        @endif
                        @if(($risco->cat_risco>350) && ($risco->cat_risco<=500))
                          <td  class="{{ $classe }}">{!! 'Não' !!}</td>
                        @endif
                  @endif
                @endforeach
              @endif
            @endforeach
            </tbody>
        </table>
        <hr/>
    </div>
    @stop