<?php

class Engine
{
    public function __construct($scenarioName)
    {
        $this->scenario = new $scenarioName();
    }
    
    public function gameLoop()
    {
        while(true)
        {
            $room = $scenario->getRoom();
            echo $room->getDesc();
            $command = readline('~:');
            readline_add_history($command);
            $this->handleCommand($command);
        }
    }
}