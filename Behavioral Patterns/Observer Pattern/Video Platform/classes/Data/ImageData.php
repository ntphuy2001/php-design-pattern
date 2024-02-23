<?php

class ImageData extends Subject {
    private $title = '';
    private $photographer = '';

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;
        $this->imageDataChanged();
        return $this;
    }

    /**
     * Get the value of photographer
     */ 
    public function getPhotographer()
    {
        return $this->photographer;
    }

    /**
     * Set the value of photographer
     *
     * @return  self
     */ 
    public function setPhotographer($photographer)
    {
        $this->photographer = $photographer;
        $this->imageDataChanged();
        return $this;
    }

    private function imageDataChanged() {
        parent::notifyObservers($this, null);
    } 
}