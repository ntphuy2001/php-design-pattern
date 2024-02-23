<?php
require_once './interface/IQuackBehavior.php';
require_once './interface/IFlyBehavior.php';

abstract class Duck {
    private IQuackBehavior $_quackBehavior;
    private IFlyBehavior $_flyBehavior;
    // private IDisplayBehavior $_displayBehavior;

    public function __construct(IQuackBehavior $quackBehavior, IFlyBehavior $flyBehavior) {
        $this->_quackBehavior = $quackBehavior;
        $this->_flyBehavior = $flyBehavior;
        // $this->_displayBehavior = $displayBehavior;
    }

    public function fly() {
        $this->_flyBehavior->fly();
    }

    public function quack() {
        $this->_quackBehavior->quack();
    }

    public function setFlyBehavior(IFlyBehavior $flyBehavior) {
        $this->_flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(IQuackBehavior $quackBehavior){
        $this->_quackBehavior = $quackBehavior;
    }
    abstract public function display();

}