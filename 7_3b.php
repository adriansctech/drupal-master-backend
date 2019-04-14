<?php

//Require other php file
require_once "7_1a.php";

//Use other class with namespaces
use php\Vehicle\Vehicle as Driving;


class Car extends Driving {	
	
	function __construct($brand, $seats, $fuel_capacity, $license_plate, $type){		
		parent::__construct($brand, $seats, $fuel_capacity, $license_plate);
		$this->type = $type;			
	}	

}

$car = new Car("Masserati", "1", "50", "672AV", "car");

$car->startEngine();

$car->fillTank(40);

while($car->getFuelLevel() > $car->fuel_capacity/2) {
	
	$car->accelerate();

}

if($car->getFuelLevel() == $car->fuel_capacity/2) {
	
	while ($car->getCurrentSpeed() > 0) {

		$car->slowDown();		
	}

	if($car->getCurrentSpeed() == 0) {

		$car->stopEngine();

	}

}
