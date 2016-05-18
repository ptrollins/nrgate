<?php


require_once("config.php");
require_once("header.php");
require_once("PhpSerial.php");

// Send kill signal to Arduino
define('SERIAL_DEVICE', '/dev/ttyUSB4');

$comPort = "COM5"; //The com port address.

$msg = '';

$serial = new phpSerial;

$serial->deviceSet($comPort);

$serial->confBaudRate(9600);

$serial->confParity("none");

$serial->confCharacterLength(8);

$serial->confStopBits(1);

$serial->deviceOpen();

sleep(2); //Unfortunately this is necessary, Arduino requires a 2 second delay in order to receive the message

$serial->sendMessage("KILL");

$serial->deviceClose();

$msg = "You message has been sent! WOHOO!";

header("Location: index.php"); die();