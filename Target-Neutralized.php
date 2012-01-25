<?php
require_once("lib/Scenario.php");
require_once("Scenarios/TheSpy.php");
$scenario = new TheSpy();
foreach($scenario->getRooms() as $room)
{
    echo $room["name"]."\n";
    echo $room["desc"]."\n\n";
}
