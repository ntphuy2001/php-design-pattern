<?php
require_once './classes/Base/Observer.php';

class PhoneNotifier extends Observer {
    public function __construct($subject)
    {
        $this->subject = $subject;
        $this->subject->attachObserver($this);
    }

    public function notify($subject, $arg)
    {
        if (is_a($subject, 'VideoData')) {
            echo "Notify all subscribers via Phone with new data <br/>";
            echo "Title: {$subject->getTitle()} <br/>";
            echo "Description: {$subject->getDescription()} <br/>";
            echo "File name: {$subject->getFileName()} <br/>";
        }
    }
}