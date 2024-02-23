<?php

class Remote {
    private readonly Command $_turnOnCommand;
    private readonly Command $_turnOffCommand;
    public function __construct(Command $turnOnCommand, Command $turnOffCommand) {
        $this->_turnOnCommand = $turnOnCommand;
        $this->_turnOffCommand = $turnOffCommand;
    }

    public function turnOnButtonClick() {
        $this->_turnOnCommand->execute();
    }

    public function turnOffButtonClick() {
        $this->_turnOffCommand->execute();
    }
}