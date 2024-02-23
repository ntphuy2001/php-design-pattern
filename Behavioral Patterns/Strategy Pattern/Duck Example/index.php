<?php
require_once './classes/BasicFly.php';
require_once './classes/BasicQuack.php';
require_once './classes/VipProFly.php';
require_once './classes/VipProQuack.php';
require_once './classes/CityDuck.php';
require_once './classes/WildDuck.php';

$vipProQuack = new VipProQuack();

$cityDuck = new CityDuck();
$cityDuck->setQuackBehavior($vipProQuack);
$cityDuck->display();
echo '<hr/>';
$wildDuck = new WildDuck();
$wildDuck->display();