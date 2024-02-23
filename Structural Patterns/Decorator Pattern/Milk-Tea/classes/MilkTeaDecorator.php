<?php

abstract class MilkTeaDecorator implements IMilkTea {
    // public abstract function cost();
    protected $_milkTea;
    public function __construct(IMilkTea $inner) {
        $this->_milkTea = $inner;
    }
    public  function cost(){
        return $this->_milkTea->cost();
    }
}
