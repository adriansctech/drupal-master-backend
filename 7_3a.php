<?php

//Require other php file
require_once "7_1a.php";

//Use other class with namespaces
use php\Vehicle\Vehicle as Driving;


class Motorbike extends Driving {	
	
	function __construct($brand, $seats, $fuel_capacity, $license_plate, $type){		
		parent::__construct($brand, $seats, $fuel_capacity, $license_plate);
		$this->type = $type;			
	}

	public function accelerate($acceleration = 1) {
		parent::accelerate($acceleration = 3);
	}

}

$motorbike = new Motorbike("Ducati", "1", "50", "672AV", "motorbike");

$motorbike->startEngine();

$motorbike->fillTank(40);

while($motorbike->getFuelLevel() > $motorbike->fuel_capacity/2) {
	
	$motorbike->accelerate();

}

if($motorbike->getFuelLevel() == $motorbike->fuel_capacity/2) {
	
	while ($motorbike->getCurrentSpeed() > 0) {

		$motorbike->slowDown();		
	}

	if($motorbike->getCurrentSpeed() == 0) {

		$motorbike->stopEngine();

	}

}

