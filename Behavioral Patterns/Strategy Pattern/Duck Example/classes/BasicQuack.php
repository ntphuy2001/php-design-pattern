<?php
require_once './interface/IQuackBehavior.php';

class BasicQuack implements IQuackBehavior {
    public function quack() {
        echo '+1 Basic quack<br/>';
    }
}   