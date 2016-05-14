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
            <canvas id="powerChart" height="900" width="1400"></canvas>
        </button>
    </div>

    <div class="power-reading-row">
        <div class="power-label">
            500 W
        </div>
    </div>

    <div class="bottom-display-row">
        <div class="bottom-display-col">
            <div class="">
                <button style="background-size: 100%; background: #00897B;
                        height: 15vh; width: 26vw ; border: 0; box-shadow: 2px 5px 5px #00796B; font-size: 13vh; font-weight: bold; color: white;">
                    <img src="./style/images/thermo.png" height="70%">
                    <div class="temp-label">
                        21° C
                    </div>
                </button>

            </div>
    
            <div class="">
                <button style="background-size: 100%; background: #00897B;
                         height: 15vh; width: 26vw; border: 0; box-shadow: 2px 5px 5px #00796B;
">

                    <img src="./style/images/cloud.png" height="70%">
                </button>
                <div class="co2-label">
                    2, 3 ppm
                </div>
            </div>
        </div>

    </div>

</body>
</html>