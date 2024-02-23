<?php

class Subject {
    private $_observers = [];
    
    public function attachObserver($observer) {
        $this->_observers[] = $observer;
    }

    public function detachObserver($observer) {
        $detachIndex = array_search($observer, $this->_observers);
        unset($this->_observers[$detachIndex]);
        $this->_observers = array_values($this->_observers);
    }

    /**
     * 
     * @param Subject $subject
     * @param Object $arg
     */
    public function notifyObservers($subject, $arg) {
        foreach ($this->_observers as $observer) {
            $observer->notify($subject, $arg);
        }
    }
}