<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    
    <title>NRgate</title>
    
    <link href="style/default.css" rel="stylesheet" type="text/css">
    
    <script src="lib/Chartjs/dist/Chart.js"></script>
    <script src="lib/nrgate.js"></script>
    <script >
        var now = new Date(<?php echo time() * 1000 ?>);

        function startInterval(){
            setInterval('updateTime();', 1000);
        }

        startInterval();//start it right away

        function updateTime(){
            var nowMS = now.getTime();
            nowMS += 1000;
            now.setTime(nowMS);
            var clock = document.getElementById('clock');
            if(clock){
                clock.innerHTML = now.toTimeString();//adjust to suit
            }
        }
    </script>
</head>