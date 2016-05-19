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



<label class="feedback-row">
  <input class="checkbox" type="checkbox"> 
     <span class="feedback-row">
 		LIGHTBULB OUTAGE
 	</span>
</label>

<label class="feedback-row">
  <input class="checkbox" type="checkbox"> 
     <span class="feedback-row">
BROKEN WINDOW
 	</span>
</label>

<label class="feedback-row">
  <input class="checkbox" type="checkbox" name="day" value="LIGHTBULB OUT"> 
     <span class="feedback-row">
BROKEN DOOR
 	</span>
</label>

<label class="feedback-row">
  <input class="checkbox" type="checkbox" name="day" value="LIGHTBULB OUT"> 
     <span class="feedback-row">
POWER OUTAGE
 	</span>
</label>

<label class="feedback-row">
  <input class="checkbox" type="checkbox"> 
     <span class="feedback-row">
HEATING ISSUE 	</span>
</label>

<label class="feedback-row">
  <input class="checkbox" type="checkbox" > 
     <span class="feedback-row">
BROKEN TV
 	</span>
</label>

</body>
</html>