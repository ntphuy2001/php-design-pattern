<?php 
require_once './interface/Command.php';

class TurnOnCommand implements Command {
    private readonly Light $light;
    public function __construct(Light $light) {
        $this->light = $light;
    }
    public function execute(){
        $this->light->turnOn();
    }

    public function undo(){
        $this->light->turnOff();
    }
 }