<?php 
require_once './interface/Command.php';

class TurnOffCommand implements Command {
    private readonly Light $light;
    public function __construct(Light $light) {
        $this->light = $light;
    }
    public function execute(){
        $this->light->turnOff();
    }

    public function undo(){
        $this->light->turnOn();
    }
 }