<?php
require_once './Interface/AnimalFactory.php';
require_once './Classes/Dog.php';
require_once './Classes/Cat.php';
require_once './Classes/Dog.php';
class BasicAnimalFactory implements AnimalFactory {
    private $index = 0;

    public function createAnimal(): Animal
    {
        switch ($this->index) {
            case 0:
                $this->index++;
                return new Dog();
            case 1:
                $this->index++;
                return new Cat();
            default:
                $this->index = 0;
                return new Duck();
        }
    }
}