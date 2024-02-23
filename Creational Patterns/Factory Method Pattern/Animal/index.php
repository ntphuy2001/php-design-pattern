<?php
require_once './Classes/BasicAnimalFactory.php';
require_once './Classes/RandomAnimalFactory.php';


$basicFactory = new BasicAnimalFactory();
$randomFactoy = new RandomAnimalFactory();

for ($i = 0; $i < 6; $i++) {
    $basicFactory->createAnimal()->getName();
}
echo "<hr/>";
for ($i = 0; $i < 6; $i++) {
    $randomFactoy->createAnimal()->getName();
}