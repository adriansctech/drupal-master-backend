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