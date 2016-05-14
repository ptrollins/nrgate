var doughnutData = {};

function respondCanvas() {

    var doughnutOptions = {
        cutoutPercentage : 70, //The percentage of the chart that we cut out of the middle.
        rotation: (.7*Math.PI),
        circumference: (0.8 *2 * Math.PI),
        animation: {
            animateScale: false,
            animateRotate: false
        }
    };

    //Get the context of the Doughnut Chart canvas element we want to select
    var ctx = document.getElementById("powerChart");

    // Create the Doughnut Chart
    var powerChart = new Chart(ctx,{
        type: 'doughnut',
        data: {
            labels: [],
            datasets: doughnutData
        },
        options: doughnutOptions
    });
}

var GetChartData = function (i) {
    $.ajax({
        url: 'api.php',
        method: 'POST',
        dataType: 'json',
        success: function (powerUsed) {
            doughnutData = [{
                data: [powerUsed, 100-powerUsed],
                backgroundColor: ['#1a433f','#ffffff'],
                borderColor: ['#1a433f','#51b497'],
                borderWidth: [40,10]
            }];
            respondCanvas();
        }
    });
};

$(document).ready(function() {
    setInterval(GetChartData(5),1000);
});