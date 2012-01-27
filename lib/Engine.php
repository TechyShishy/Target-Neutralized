<?php

class Engine
{
    protected $scenario;
    
    public function __construct($scenarioName)
    {
        $this->scenario = new $scenarioName();
    }
    
    public function gameLoop()
    {
        while(true)
        {
            $room = $this->scenario->getRoom();
            echo $room->getDesc()."\n\n";
            $this->interact();
        }
    }
    
    protected function interact()
    {
        $command = readline('~: ');
        readline_add_history($command);
        $this->handleCommand($command);
    }
    
    protected function handleCommand($command)
    {
        if($command=="look")
        {
            $room=$this->scenario->getRoom();
            echo $room->getDesc()."\n";
            $this->interact();
        }
        else if($command=="east" || $command=="west" || $command=="north" || $command=="south")
        {
            $this->scenario->move($command);
            return;
        }
    }
}
