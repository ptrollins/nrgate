<?php

require_once("config.php");
require_once("header.php");

?>
<body class="main">
    <header class="header-row" >
        <div class="logo"><img src="style/images/fortum.png"></div>
        <div style="float: right; width: 50%" align="center"><img src="style/images/acre.png"></div>
    </header>

    <div class="power-graph-row">
        <button class="power-graph-button">
            <canvas id="powerChart" height="900" width="1400"></canvas>
        </button>
    </div>

    <div class="power-reading-row">
        <div class="power-label">50 WATTS</div>
    </div>

    <div class="bottom-display-row">
        <div class="bottom-display-col">
            <div class="">
                <button style="background-size: 100%; background: #49997B;
                        height: 15vh; width: auto; font-size: 13vh; font-weight: bold; color: white;">
                    <img src="./style/images/thermo.png" height="70%">
                </button>

                <!--canvas id="tempChart" style="height: 100%; width: 30%"></canvas-->
            </div>
    
            <div class="">
                <button style="background-size: 100%; background: #49997B;
                         height: 15vh; width: auto">
                    <img src="./style/images/cloud.png" height="70%">
                </button>
            </div>

        </div>

    </div>
</body>
</html>