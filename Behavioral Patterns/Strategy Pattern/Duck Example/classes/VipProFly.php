<?php
require_once './interface/IFlyBehavior.php';

class VipProFly implements IFlyBehavior {
    public function fly() {
        echo '+10 Vip Pro fly <br/>';
    }
}   