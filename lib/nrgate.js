var doughnutData = {};

function respondCanvas(powerUsed) {

    var doughnutOptions = {
        cutoutPercentage : 80, //The percentage of the chart that we cut out of the middle.
        rotation: (.7*Math.PI),
        circumference: (0.8 *2 * Math.PI),
        animation: {
            animateScale: false,
            animateRotate: false
        }
    };

    doughnutData = [{
        data: [powerUsed, 2300-powerUsed],
        backgroundColor: ['#1a433f','#b4f5e0'],
        borderColor: ['#1a433f','#b4f5e0'],
        borderWidth: [0,0]
    }];
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

var getSensorData = function () {
    $.ajax({
        url: 'sensor-api.php',
        method: 'POST',
        dataType: 'json',
        success: function (sensorData) {
            if(sensorData.neardoor){
               document.getElementById("power-off-footer").style.visibility = 'visible';
            }else{
                document.getElementById("power-off-footer").style.visibility = 'hidden';
            }
            //console.log(sensorData);
            respondCanvas(sensorData.watts);
            document.getElementById("power-label").innerHTML = sensorData.watts + "W";
            document.getElementById("temp-label").innerHTML = sensorData.temp + "&#8451";
            document.getElementById("co2-label").innerHTML = sensorData.airquality + "ppm";
        },
        error: function(){}
    });
    setTimeout(getSensorData, 1000);
};

// var getSensorData = function () {
//     var randAdd = Math.floor(Math.random()*2);
//     var randWatts = Math.floor(Math.random()*100);
//     var randTemp = Math.floor(Math.random()*2);
//     var randAir = Math.floor(Math.random() * 10);
//
//     if(randAdd == 1){
//         while(watts < 2000){watts += randWatts;}
//         while(temp < 24){temp += randTemp;}
//         while(airquality < 1000){airquality += randAir;}
//     }else{
//         while(watts > 500){watts -= randWatts;}
//         while(temp > 16){temp -= randTemp;}
//         while(airquality > 200){airquality -= randAir;}
//     }
//
//     respondCanvas(watts);
//     document.getElementById("power-label").innerHTML = watts + "W";
//     document.getElementById("temp-label").innerHTML = temp + "&#8451";
//     document.getElementById("co2-label").innerHTML = airquality + "ppm";
//
//     setTimeout(getSensorData, 10000);
// };

$(document).ready(function() {
    if($('body').is('.power-graph-page')){
        getSensorData();
    }
});
