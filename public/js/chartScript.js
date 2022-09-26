 var xValues = [50, 60, 30, 80, 90, 100, 110, 200, 130, 140, 150];
 var yValues = [7, 8, 8, 9, 8, 9, 10, 11, 14, 12, 15];

 xValues.sort(function (a, b) {
     return a - b
 });

 yValues.sort(function (a, b) {
     return a - b
 });

 new Chart("myChart", {
     type: "line",
     data: {
         labels: xValues,
         datasets: [{
             fill: true,
             lineTension: 0,
             backgroundColor: "#8df",
             borderColor: "#grey",
             data: yValues
         }]

     },
     options: {
         legend: {
             display: false
         },
         responsive: true,
         title: {
             display: true,
             text: 'Workout Result'
         },
         scales: {
             yAxes: [{
                 ticks: {
                     min: 0,
                     max: 18
                 }
             }],
         }
     }
 });
