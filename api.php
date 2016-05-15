<?php

require_once("config.php");
require_once("functions.php");

$alldata = fetchSensorData();

print(json_encode($alldata));
