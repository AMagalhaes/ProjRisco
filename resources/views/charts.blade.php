@extends('app')

@section('content')

<script src="{{ asset("scripts/chart.js") }}"></script>

<div class="container">
        <div class="row">
            <div class="col-md-12"><h2 class="text-center">Categorias de riscos</h2></div>
        </div>

        <table>
            <tr>
                <td><h4><b>Níveis de risco</b></h4></td>
            </tr>
                <tr></tr>
            <tr>
                <td>Aceitável</td>
                <td>-----</td>
                <td>-------></td>
                <td></td>
                <td>0 - 50</td>
            </tr>
            <tr>
                <td>Normal</td>
                <td>-----</td>
                <td>-------></td>
                <td></td>
                <td>51 - 1250</td>
            </tr>
            <tr>
                <td>Alto</td>
                <td>-----</td>
                <td>-------></td>
                <td></td>
                <td>1251 - 2250</td>
            </tr>
            <tr>
                <td>Crítico</td>
                <td>-----</td>
                <td>-------></td>
                <td></td>
                <td>2251 - 2500</td>
            </tr>
        </table>

    <div class="row">
        <div class="col-md-1 labelGraph"><h3>Nível de risco</h3></div>

        <div class="col-md-11">
            <canvas id="myChart" width="800" height="300"></canvas>

            <h3 class="text-center">Referência do risco</h3>
        </div>
    </div>

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
</div>

<hr/>

<div class="container">
    <div class="row">
        <div class="col-md-12"><h2 class="text-center">Valor dos Ativos</h2></div>
    </div>

    <div class="row">
        <div class="col-md-1 labelGraph"><h3>Valor do Ativo</h3></div>

        <div class="col-md-11">
            <canvas id="myChart2" width="800" height="300"></canvas>

            <h3 class="text-center">Referência do Ativo</h3>
        </div>
    </div>

    <script>
        var barChartData2 = {
            labels: [@foreach ($activos as $activo) "{{ $activo->id}}", @endforeach],
        datasets: [
            {
                fillColor: "rgba(21,191,48,1)",
                strokeColor: "rgba(220,220,220,0.8)",
                highlightFill: "rgba(220,220,220,0.75)",
                highlightStroke: "rgba(220,220,220,1)",
                data: [@foreach ($activos as $activo) "{{ $activo->valor}}", @endforeach]
        }
        ]
        }
    </script>
</div>

<script src="{{ asset("scripts/charts_impl.js") }}"></script>
@endsection