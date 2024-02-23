<?php
require_once './classes/Light.php';
require_once './classes/TurnOnCommand.php';
require_once './classes/TurnOffCommand.php';
require_once './classes/Remote.php';

$light = new Light();

$turnOnCommand = new TurnOnCommand($light);
$turnOffCommand = new TurnOffCommand($light);

$remote = new Remote($turnOnCommand, $turnOffCommand);

$remote->turnOnButtonClick();
$remote->turnOffButtonClick();