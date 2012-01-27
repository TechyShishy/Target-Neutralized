<?php

class TheSpy extends Scenario
{
    protected $currentRoom;
    private $roomsArray = array(
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
    protected $rooms = array();
    
    public function __construct()
    {
        $this->doLoad();
        $this->currentRoom = $this->rooms[0];
    }
    public function getRooms()
    {
        return $this->rooms;
    }
    public function getRoom()
    {
        return $this->currentRoom;
    }
    protected function doLoad()
    {
        foreach($this->roomsArray as $id => $room)
        {
            $this->rooms[$id] = new Room($room);
        }
        foreach($this->rooms as $room)
        {
            $room->doHookupExits($this->rooms);
        }
    }
}
