<?php

require_once  './Classes/Car.php';
require_once  './Classes/CarBuilder.php';

$car = new Car(4,
                'HUY Seat Belt',
                'red',
                'HUY Windscreen',
                'Huy Engine');

$carBuilder = (new CarBuilder())
                ->addWheels(4)
                ->addSeatBelts('HUY Seat Belt')
                ->addEngine('Huy Engine')
                ->addWindscreen('HUY Windscreen')
                ->paint('Blue')
                ->build();

$carBuilder->introduceCar();
echo "<hr/>";
$car->introduceCar();

