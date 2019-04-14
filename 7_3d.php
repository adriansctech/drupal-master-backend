<?php

//Require class -motorbike
require_once "7_3a.php";
//Require class -car
require_once "7_3b.php";
//Require class -truck
require_once "7_3c.php";

$motorbike1 = new Motorbike("Ducati", "1", "50", "672AV", "motorbike");
$motorbike1->startEngine();
$motorbike1->fillTank(40);
while($motorbike1->getFuelLevel() > $motorbike1->fuel_capacity/2) {	
	$motorbike1->accelerate();
}

if($motorbike1->getFuelLevel() == $motorbike1->fuel_capacity/2) {	

	while ($motorbike1->getCurrentSpeed() > 0) {
		$motorbike1->slowDown();		
	}

	if($motorbike1->getCurrentSpeed() == 0) {
		$motorbike1->stopEngine();
	}

}


$truck = new Truck("Iveco", "1", "120", "672AV", "truck");
$truck->startEngine();
$truck->fillTank($truck->fuel_capacity/2);
while($truck->getFuelLevel() > $truck->fuel_capacity/4) {	
	$truck->accelerate();
}

if($truck->getFuelLevel() == $truck->fuel_capacity/4) {
	
	while ($truck->getCurrentSpeed() > 0) {
		$truck->slowDown();		
	}

	if($truck->getCurrentSpeed() == 0) {

		$truck->stopEngine();

	}

}

//Display vehicles type of Master Class without instanciated
print_r($truck::getVehicleTypes());