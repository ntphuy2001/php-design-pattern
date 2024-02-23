<?php

class Car
{
    private $_numberOfWheels;
    private $_seatBelt;
    private $_color;
    private $_windscreen;
    private $_engine;

    public function __construct($numberOfWheels, $seatBelt, $color, $windscreen, $engine)
    {
        $this->_numberOfWheels = $numberOfWheels;
        $this->_seatBelt = $seatBelt;
        $this->_color = $color;
        $this->_windscreen = $windscreen;
        $this->_engine = $engine;
    }

    public function introduceCar() {
        echo "Number of Wheels: {$this->_numberOfWheels} <br/>";
        echo "Seat belt: {$this->_seatBelt} <br/>";
        echo "Color: {$this->_color} <br/>";
        echo "Windscreen: {$this->_windscreen} <br/>";
        echo "Engine: {$this->_engine} <br/>";
    }

    /**
     * @return mixed
     */
    public function getNumberOfWheels()
    {
        return $this->_numberOfWheels;
    }

    /**
     * @param mixed $numberOfWheels
     */
    public function setNumberOfWheels($numberOfWheels): void
    {
        $this->_numberOfWheels = $numberOfWheels;
    }

    /**
     * @return mixed
     */
    public function getSeatBelt()
    {
        return $this->_seatBelt;
    }

    /**
     * @param mixed $seatBelt
     */
    public function setSeatBelt($seatBelt): void
    {
        $this->_seatBelt = $seatBelt;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->_color = $color;
    }

    /**
     * @return mixed
     */
    public function getWindscreen()
    {
        return $this->_windscreen;
    }

    /**
     * @param mixed $windscreen
     */
    public function setWindscreen($windscreen): void
    {
        $this->_windscreen = $windscreen;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->_engine;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine): void
    {
        $this->_engine = $engine;
    }
}