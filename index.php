<?php

require_once("config.php");
require_once("header.php");

?>
<body class="main">
    <header class="header-row" >
        <div>
            <img src="style/images/fortum.png"></div>
        <div id="clock" class="clock">
        </div>
        <div class="logo">
            <img src="style/images/acre.png"></div>
        </div>
    </header>

    <div class="power-graph-row">
        <button class="power-graph-button">

            <canvas id="powerChart" height="800" width="1400">

            </canvas>



        </button>
    </div>

    <div class="power-reading-row">
<<<<<<< Updated upstream
        <div class="power-label">
    500 W
        </div>
=======
        <div class="power-label" id="powerlable"></div>
>>>>>>> Stashed changes
    </div>

    <div class="bottom-display-row">
        <div class="bottom-display-col">
            <div class="">
                <button style="background-size: 100%; background: #00897B;
                        height: 15vh; width: 26vw ; border: 0; box-shadow: 3px 5px 10px #00796B; font-size: 13vh; font-weight: bold; color: white; border-radius: 50%">
                    <img src="./style/images/thermo.png" height="70%">
                    <div class="temp-label" id="temp-label"></div>
                </button>

            </div>
    
            <div class="">
                <button style="background-size: 100%; background: #00897B;
                         height: 15vh; width: 26vw; border: 0; box-shadow: 3px 5px 10px #00796B; border-radius: 50%;">
                    <img src="./style/images/cloud.png" height="75%">
                </button>
                <div class="co2-label" id="co2-label"></div>
            </div>
        </div>
    </div>


            <button class="footer" style="
            background-size: 100%;
            background: #00897B;
            border: 0;
            font-size: 3vh;
            color:white;
            text-align: center;
            letter-spacing: 20px;
            font-weight: 200;
            width: 100%;
            box-shadow: inset 0px 7px 7px #00796B;">
                <img src="./style/images/arrow.png" width="50%">
            </button>




</body>
</html>