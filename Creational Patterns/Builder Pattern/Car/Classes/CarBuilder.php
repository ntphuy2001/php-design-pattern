<?php
require_once './Interface/CarBuilder.php';

class CarBuilder implements ICarBuilder {
    private Car $_car;

    public function __construct()
    {
        $this->_car = new Car(0, '', '', '', '');
    }

    public function addWheels($numberOfWheels): CarBuilder
    {
        $this->_car->setNumberOfWheels($numberOfWheels);
        return $this;
    }

    public function addSeatBelts($seatBelt): CarBuilder
    {
        $this->_car->setSeatBelt($seatBelt);
        return $this;
    }

    public function paint($color): CarBuilder
    {
        $this->_car->setColor($color);
        return $this;
    }

    public function addWindscreen($windscreen): CarBuilder
    {
        $this->_car->setWindscreen($windscreen);
        return $this;
    }

    public function addEngine($engine): CarBuilder
    {
        $this->_car->setEngine($engine);
        return $this;
    }

    public function build(): Car
    {
        return $this->_car;
    }
}