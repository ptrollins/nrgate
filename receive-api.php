<?php

require_once("config.php");
require_once("functions.php");

$sensorDataStr = $_POST['data'];

writeSensorData($sensorDataStr);

