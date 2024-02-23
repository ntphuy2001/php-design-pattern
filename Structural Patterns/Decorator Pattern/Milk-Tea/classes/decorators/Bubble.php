<?php

require_once './classes/MilkTeaDecorator.php';
class Bubble extends MilkTeaDecorator {
    // public function __construct(IMilkTea $inner)
    // {
        // parent::__construct($inner);
        // echo self::class."<br/>";
        // $this->_milkTea = $inner;
    // }

    public function cost()
    {
        return 1 + parent::cost();
    }
}