@extends('app')

@section('content')

<script src="{{ asset("scripts/chart.js") }}"></script>

<div class="container">
    <h1 class="text-center">Categorias de riscos</h1>
    <div class="globalGraph">
    <div class="graphLabel"><h3>Nível de risco</h3></div>
    <div class="graph">
            <canvas id="myChart" width="800" height="300"></canvas>

        <script>
        var barChartData = {
            labels: [@foreach ($riscos as $risco) "{{ $risco->id}}", @endforeach],
            datasets: [
                {
                    fillColor: "rgba(21,191,48,1)",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(220,220,220,0.75)",
                    highlightStroke: "rgba(220,220,220,1)",
                    data: [@foreach ($riscos as $risco) "{{ $risco->cat_risco}}", @endforeach]
                }
            ]
        }
            </script>
        <script src="{{ asset("scripts/charts_impl.js") }}"></script>
    <div class="refRisco"><h3>Referência do risco</h3></div>
    </div>
        </div>
    <h2><b>Níveis</b></h2>
        <div class="teste">
            <div>
                <p>0 - 50 -------> Aceitável
            </div>
            <div>
                <p>51 - 1250 -------> Normal
            </div>
            <div>
                <p>1251 - 2250 -------> Alto
            </div>
            <div>
                <p>2251 - 2500 -------> Crítico
            </div>
        </div>
</div>
@endsection