@extends('app')

@section('content')

<script src="{{ asset("scripts/chart.js") }}"></script>

<div class="container">
    <h2>Identificação dos riscos e respetivos valores das categorias de risco</h2>
    <div class="graph">
            <canvas id="myChart" width="900" height="400"></canvas>

        <script>
        var barChartData = {
            labels: [@foreach ($riscos as $risco) "{{ $risco->id}}", @endforeach],
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(220,220,220,0.75)",
                    highlightStroke: "rgba(220,220,220,1)",
                    data: [@foreach ($riscos as $risco) "{{ $risco->cat_risco}}", @endforeach]
                }
            ]
        }
            </script>
        <script src="{{ asset("scripts/charts_impl.js") }}"></script>
    </div>
</div>
@endsection