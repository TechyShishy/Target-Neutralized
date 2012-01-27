<?php
require_once("lib/Scenario.php");
require_once("lib/Room.php");
require_once("lib/Engine.php");
require_once("Scenarios/TheSpy.php");

$engine = new Engine('TheSpy');
$engine->gameLoop();