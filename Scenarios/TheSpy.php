<?php

class TheSpy extends Scenario
{
    private $rooms = array(
       0 => array( 
           "name" => "Home", 
           "desc" => "This is your home",
           "exits" => array( "east" => 1)
           ),
        1 => array(
            "name" => "Home Airport",
            "desc" => "Airport in my home town that will let me travel to LA",
            "exits" => array( "west" => 0)
            )
        );
        public function getRooms()
        {
            return $this->rooms;
        }
}