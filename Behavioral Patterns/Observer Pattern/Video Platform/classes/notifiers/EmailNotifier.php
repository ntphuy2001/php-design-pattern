<?php
require_once './classes/Base/Observer.php';

class EmailNotifier extends Observer {
    public function __construct($subject)
    {
        $this->subject = $subject;
        $this->subject->attachObserver($this);
    }

    public function notify($subject, $arg)
    {
        if (is_a($subject, 'VideoData')) {
            echo "Notify all subscribers via Email with new video data <br/>";
            echo "Title: {$subject->getTitle()} <br/>";
            echo "Description: {$subject->getDescription()} <br/>";
            echo "File name: {$subject->getFileName()} <br/>";
        } else if (is_a($subject, 'ImageData')) { 
            echo "Notify all subscribers via Email with new message data <br/>";
            echo "Title: {$subject->getTitle()} <br/>";
            echo "Description: {$subject->getPhotographer()} <br/>";
        }
    }
}