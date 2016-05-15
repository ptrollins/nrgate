<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    
    <title>NRgate</title>
    
    <link href="style/default.css" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
            crossorigin="anonymous"></script>
    <script src="lib/Chartjs/dist/Chart.js"></script>
    <script src="lib/nrgate.js"></script>
    <script >
        var now = new Date(<?php echo time() * 1000 ?>);

        function startInterval(){
            setInterval('updateTime();', 999);
        }

        startInterval();//start it right away

        function updateTime(){
            var nowMS = now.getTime();
            nowMS += 1000;
            now.setTime(nowMS);
            var clock = document.getElementById('clock');
            if(clock){
                clock.innerHTML = now.toTimeString().slice(0,5);//adjust to suit
            }
        }
    </script>
</head>