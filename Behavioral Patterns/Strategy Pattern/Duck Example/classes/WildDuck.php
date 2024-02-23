<?php
require_once './classes/Duck.php';
class WildDuck extends Duck {
    public function __construct() {
        $basicFly = new BasicFly();
        $vipProQuack = new VipProQuack();
        parent::__construct($vipProQuack, $basicFly);
    }

    public function display()
    {   
        echo self::class."<br/>";
        $this->fly();
        $this->quack();
    }
}