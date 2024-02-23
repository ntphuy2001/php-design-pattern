<?php
require_once './interface/IFlyBehavior.php';
class BasicFly implements IFlyBehavior {
    public function fly() {
        echo '+1 Basic fly <br/>';
    }
}   