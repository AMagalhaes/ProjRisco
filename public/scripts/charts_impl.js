window.onload = function () {
    var ctx = document.getElementById("myChart").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
        responsive: true,
        datasetFill: true
    });


    for (var index = 0; index < myBar.datasets[0].bars.length; index++) {
      // get bar
      var bar = myBar.datasets[0].bars[index];

      // get the bar value
      var value = parseInt(bar.value);

       if (value > 0 && value <=50)  {
        bar.fillColor = "green";
      }else{
        if (value > 50 && value <=200)  {
          bar.fillColor = "yellow";
        }else{
          if (value > 200 && value <=300)  {
            bar.fillColor = "orange";
          }else{
            if (value > 300 && value <=500)  {
              bar.fillColor = "red";
            }
          }
        }
      }
    }

    myBar.update();


    
    var sdCanvasChart = document.getElementById("myChart2").getContext("2d");
    var chart2 = new Chart(sdCanvasChart).Bar(barChartData2, {
        responsive: true,
        datasetFill: true
    });

  for (var index = 0; index < chart2.datasets[0].bars.length; index++) {
      // get bar
      var bar = chart2.datasets[0].bars[index];

      // get the bar value
      var value = parseInt(bar.value);

      if (value > 0 && value <=3)  {
        bar.fillColor = "yellow";
      }else{
        if (value > 3 && value <=7)  {
          bar.fillColor = "orange";
        }else{
          if (value > 7 && value <=10)  {
            bar.fillColor = "red";
          }
        }
      }
    }

    chart2.update();
}