<?php
require_once './classes/Base/Subject.php';
class VideoData extends Subject
{
    private string $_title = '';
    private string $_description = '';
    private string $_fileName = '';

    /**
     * Get the value of _title
     * 
     * @return String
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * Set the value of _title
     *
     * @param String $title
     * @return  self
     */
    public function setTitle($title)
    {
        $this->_title = $title;
        $this->videoDataChanged();
        return $this;
    }
    
    /**
     * Get the value of _description
     * 
     * @return String
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Set the value of _description
     *
     * @param String $description
     * @return  self
     */
    public function setDescription($description)
    {
        $this->_description = $description;
        $this->videoDataChanged();
        return $this;
    }

    /**
     * Get the value of _fileName
     * 
     * @return String
     */
    public function getFileName()
    {
        return $this->_fileName;
    }

    /**
     * Set the value of _fileName
     *
     * @param String $fileName
     * @return  self
     */
    public function setFileName($fileName)
    {
        $this->_fileName = $fileName;
        $this->videoDataChanged();
        return $this;
    }

    private function videoDataChanged() {
        parent::notifyObservers($this, null);
    }
}
