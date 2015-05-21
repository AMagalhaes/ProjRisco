window.onload = function () {
    var ctx = document.getElementById("myChart").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
        responsive: true
    });
}