<?php
require_once './interface/IQuackBehavior.php';

class VipProQuack implements IQuackBehavior {
    public function quack() {
        echo '+10 Vip Pro quack <br/>';
    }
}   