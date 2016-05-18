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

    <a href="index.php" class="footer" style="text-decoration: none">
        <img src="./style/images/down-arrow.png" width="50%">
    </a>

    <div class="power-off-row">

            <a href="power-api.php">
                <img src="./style/images/power-switch.png" >
            </a>

    </div>

</body>
</html>