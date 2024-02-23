<?php

require_once './classes/MilkTeaDecorator.php';
class BlackSugar extends MilkTeaDecorator {
    // public function __construct(IMilkTea $inner)
    // {
        // echo self::class."<br/>";
        // parent::__construct($inner);
    // }

    public function cost()
    {
        return 1 + parent::cost();
    }
}