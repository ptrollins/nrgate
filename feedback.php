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

    <a href="power-off.php" class="header-button">
        <img src="./style/images/down-arrow.png" width="50%">
    </a>

    <!--form action="feedback-api.php" method="post" -->
        <label class="feedback-row">
            <span class="feedback-row">LIGHTBULB OUTAGE</span>
          <input class="checkbox" type="checkbox" name="feedback" value="bulbout">
        </label>

        <label class="feedback-row">
            <span class="feedback-row">BROKEN WINDOW</span>
            <input class="checkbox" type="checkbox" name="feedback" value="windowbroken">
        </label>

        <label class="feedback-row">
            <span class="feedback-row">BROKEN DOOR</span>
            <input class="checkbox" type="checkbox" name="feedback" value="doorbroken">
        </label>

        <label class="feedback-row">
            <span class="feedback-row">POWER OUTAGE</span>
            <input class="checkbox" type="checkbox" name="feedback" value="powerout">
        </label>

        <label class="feedback-row">
            <span class="feedback-row">HEATING ISSUE</span>
            <input class="checkbox" type="checkbox" name="feedback" value="heatissue">
        </label>

        <label class="feedback-row">
            <span class="feedback-row">BROKEN MONITOR</span>
            <input class="checkbox" type="checkbox" name="feedback" value="monitorbroken">
        </label>

        <label class="feedback-row">
            <span class="feedback-row">OTHER</span>
            <input class="checkbox" type="checkbox" name="feedback" value="other">
        </label>
        <div style="display: -webkit-flex;
        display: flex;
        order: 7; height: 4vh; flex: auto;"></div>

        <a href="index.php" class="footer-button" id="power-off-footer">REPORT ISSUE</a>

            <!--input type="submit" class="footer-button" id="power-off-footer" value="REPORT ISSUE">

        </form-->
</body>
</html>