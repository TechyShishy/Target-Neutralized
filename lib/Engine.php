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
            $command = readline('~: ');
            readline_add_history($command);
            $this->handleCommand($command);
        }
    }
}
