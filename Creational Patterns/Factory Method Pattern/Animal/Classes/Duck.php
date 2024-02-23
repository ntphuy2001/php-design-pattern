<?php
require_once './Interface/Animal.php';

class Duck implements Animal {
    public function getName() {
        echo "I'm a ".self::class.'<br/>';
    } 
}