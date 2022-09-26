var xValues = ["Jan", "Feb", "March", "April", "May", "Jun"];
var yValues = [55, 30, 44, 24, 45, 60];

new Chart("BarChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: "#88ddff",
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "Average Workout / months"
        }
    }
});
