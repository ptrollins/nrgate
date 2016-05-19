<?php

require_once("config.php");
require_once("functions.php");

$sensorDataStr = $_POST['data'];

$result = writeSensorData($sensorDataStr);

if($result){
    http_response_code(200);
}else{
    http_response_code(400);
}