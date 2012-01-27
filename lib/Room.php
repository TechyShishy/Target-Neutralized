<?php

class Room
{
    protected $id;
    protected $desc;
    protected $name;
    protected $unhookedExits;
    protected $exits;
    
    public function __construct($roomArray)
    {
        $this->name = $roomArray['name'];
        $this->desc = $roomArray['desc'];
        $this->unhookedExits = $roomArray['exits'];
    }
    
    public function getDesc()
    {
        return $this->desc;
    }
    
    public function getName()
    {
        return $this->name;
    }
    public function getExits()
    {
        return $this->exits;
    }
    public function getExit($exit)
    {
        return $this->exits[$exit];
    }
    
    public function doHookupExits($roomsList)
    {
        foreach($this->unhookedExits as $direc => $id)
        {
            $this->exits[$direc] = $roomsList[$id];
        }
    }
}