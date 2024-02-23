<?php

interface ICarBuilder {
    public function addWheels($numberOfWheels) : CarBuilder;

    public function addSeatBelts($seatBelt) : CarBuilder;

    public function paint($color) : CarBuilder;

    public function addWindscreen($windscreen) : CarBuilder;

    public function addEngine($engine) : CarBuilder;
    public function build():Car;
}