<?php
require_once './classes/MilkTea.php';
require_once './classes/decorators/Bubble.php';
require_once './classes/decorators/BlackSugar.php';
require_once './classes/decorators/EggPudding.php';
require_once './classes/decorators/FruitPudding.php';
require_once './classes/decorators/WhiteBubble.php';

$milkTea = new MilkTea();
echo 'Cost: '.$milkTea->cost().'<br/>';

$bubbleMilkTea = new FruitPudding(new WhiteBubble(new EggPudding(new BlackSugar(new Bubble($milkTea)))));
echo 'Cost: '.$bubbleMilkTea->cost();
