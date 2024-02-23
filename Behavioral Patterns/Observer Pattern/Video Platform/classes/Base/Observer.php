<?php
abstract class Observer {
    protected $subject;
    
    /**
     * Notify
     *
     * @param Subject $subject
     * @param Object $arg
     */
    abstract public function notify($subject , $arg);
}