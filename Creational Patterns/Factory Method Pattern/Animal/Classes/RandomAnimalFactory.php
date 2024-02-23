<?php
require_once './Interface/AnimalFactory.php';
require_once './Classes/Dog.php';
require_once './Classes/Cat.php';
require_once './Classes/Duck.php';

class RandomAnimalFactory implements AnimalFactory {
    public function createAnimal(): Animal
    {
        $type = mt_rand(0,2);
        switch ($type) {
            case 0:
                return new Dog();
            case 1:
                return new Cat();
            default:
                return new Duck();
        }
    }
}