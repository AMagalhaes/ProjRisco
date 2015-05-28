window.onload = function () {
    var ctx = document.getElementById("myChart").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
        responsive: true,
        datasetFill: true
    });
    
    var sdCanvasChart = document.getElementById("myChart2").getContext("2d");
    new Chart(sdCanvasChart).Bar(barChartData2, {
        responsive: true,
        datasetFill: true
    });
}