<?php

require_once("config.php");
require_once("header.php");

?>
<body class="main">
    <header class="header-row" >
        <div>
            <img src="style/images/fortum.png">
        </div>
        <div id="clock" class="clock"><?php echo date("H:i", time()) ?></div>
        <div class="logo">
            <img src="style/images/acre.png">
        </div>
    </header>

    <a href="index.php" class="footer">
        <img src="./style/images/down-arrow.png" width="50%">
    </a>

    <div class="power-off-row">
        <a href="power-api.php" style="height: 60%;">
            <img src="./style/images/power-switch.png" height="100%">
        </a>

    </div>

    <div class="feedback-row" style="font-size: 300%" >
        <button class="icon-label-button" style="background-size: 100%; background: #00897B;
                         height: 10vh; width: 26vw; border: 0; font-size: 13vh; font-weight: bold; color: white;">
            <a href="feedback.php" class="co2-label" id="co2-label">FEEDBACK</a>
        </button>
    </div>
</body>
</html>