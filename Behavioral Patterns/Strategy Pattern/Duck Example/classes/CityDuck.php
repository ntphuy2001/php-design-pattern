<?php
require_once './classes/Duck.php';
class CityDuck extends Duck {
    public function __construct() {
        $vipProFly = new VipProFly();
        $basicQuack = new BasicQuack();
        parent::__construct($basicQuack, $vipProFly);
    }

    public function display()
    {   
        echo self::class."<br/>";
        $this->fly();
        $this->quack();
    }
}