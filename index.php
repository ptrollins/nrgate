<?php

require_once("config.php");
require_once("header.php");
?>
<body class="main power-graph-page">
    <header class="header-row" >
        <div>
            <img src="style/images/fortum.png" height="100">
        </div>
        <div id="clock" class="clock"><?php echo date("H:i", time())?></div>
        <div class="logo">
            <img src="style/images/acre.png" height="100">
        </div>
    </header>

    <div class="power-graph-row">
        <button class="power-graph-button">
            <canvas id="powerChart" height="800" width="1400">
            </canvas>
        </button>
    </div>

    <div class="power-reading-row">
        <div class="power-label" id="power-label"></div>
    </div>

    <div class="bottom-display-row">
        <div class="bottom-display-col">
            <div class="">
                <button class="icon-label-button" style="background-size: 100%; background: #00897B;
                        height: 15vh; width: 26vw ; border: 0; box-shadow: 3px 5px 10px #00796B; font-size: 13vh;
                        font-weight: bold; color: white; border-radius: 50%">
                    <img src="./style/images/thermo.png" height="70%">
                    <div class="button-label" id="temp-label"></div>
                </button>

            </div>
    
            <div class="">
                <button class="icon-label-button" style="background-size: 100%; background: #00897B;
                         height: 15vh; width: 26vw; border: 0; box-shadow: 3px 5px 10px #00796B; font-size: 13vh;
                         font-weight: bold; color: white; border-radius: 50%;">
                    <img src="./style/images/cloud.png" height="75%">
                    <div class="button-label" id="co2-label"></div>
                </button>
            </div>
        </div>
    </div>


    <a href="power-off.php" class="footer-button" id="power-off-footer">
        <img src="./style/images/arrow.png" width="50%">
    </a>

</body>
</html>