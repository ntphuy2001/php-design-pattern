<?php
require_once './interface/MilkTea.php';
class MilkTea implements IMilkTea {

    public function cost()
    {
        return 5;
    }
}