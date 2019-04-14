<?php

//Require other php file
require_once "7_1a.php";

//Use other class with namespaces
use php\Vehicle\Vehicle as Driving;


class Truck extends Driving {	
	
	function __construct($brand, $seats, $fuel_capacity, $license_plate, $type){		
		parent::__construct($brand, $seats, $fuel_capacity, $license_plate);
		$this->type = $type;			
	}

	public function slowDown() {		
		if ($this->current_speed < 0.5) {
			print ("El vehículo " . $this->license_plate . "se ha apagado. </br>");
		}else {
			$this->current_speed = $this->current_speed - 0.5;			
			print ("El vehículo " . $this->license_plate . "ha decrementado su velocidad, su velocidad actual es de " . $this->current_speed . ".</br>");
		} 
	}

}