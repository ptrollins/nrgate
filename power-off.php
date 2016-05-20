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

    <a href="index.php" class="header-button">
        <img src="./style/images/down-arrow.png" width="50%">
    </a>

    <div class="power-off-row">
        <a href="black.php" style="height: 60%;">
            <img src="./style/images/power-switch.png" height="100%">
        </a>

    </div>

    <a href="feedback.php" class="footer-button" id="power-off-footer">
        REPORT ISSUE
    </a>

</body>
</html>