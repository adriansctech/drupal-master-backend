<?php

//Require other php file
require_once "7_1a.php";

//Use other class with namespaces
use php\Vehicle\Vehicle as Driving;


//Create object of class Vehicle and use contruct
$vehicle1 = new Driving("seat", "4", "20", "6722AV");

//Start motor
$vehicle1->startEngine();

$vehicle1->fillTank(18);

//Acelerate vechicle1
while($vehicle1->getFuelLevel() > $vehicle1->fuel_capacity/2) {
	
	$vehicle1->accelerate();

}

if($vehicle1->getFuelLevel() == $vehicle1->fuel_capacity/2) {
	
	while ($vehicle1->getCurrentSpeed() > 0) {

		$vehicle1->slowDown();		
	}

	if($vehicle1->getCurrentSpeed() == 0) {

		$vehicle1->stopEngine();

	}

}
