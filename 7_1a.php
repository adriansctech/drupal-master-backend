<?php

//Activity 7.1a
namespace php\Vehicle;

class Vehicle {
	
	public $brand;
	public $seats;
	public $fuel_capacity;
	public $license_plate;

	protected $fuel_level = 0;
	protected $current_speed = 0;
	protected $state = 'off';
//End of activity 7.1a


//Activity 7.2a Constructor method
	public function __construct($brand, $seats, $fuel_capacity, $license_plate) {
		$this->brand = $brand;
		$this->seats = $seats;
		$this->fuel_capacity = $fuel_capacity;
		$this->license_plate = $license_plate;
		print ("Se ha registrado el vehículo " .$this->brand . "con matricula " . $license_plate .".</br>");
	}
//End of activity 7.2a


//Activity 7.2b
	public function __desctruct() {
		while ($current_speed > 1) {
			$current_speed = slowDown();
		}
		$this->state = 'off';
		print ("Se ha detenido y apagado el vehículo " . $this->license_plate . "de forma definitiva. </br>");
	}
//


//Activity 7.1b
	public function getBrand() {
		return $this->brand;
	}

	public function getSeats() {
		return $this->seats;
	}

	public function getLicensePlate() {
		return $this->license_plate;
	}
	public function setFuelLevel($fuel_level) {
		$this->fuel_level = $fuel_level;
	}

	public function setCurrentSpeed($current_speed) {
		$this->current_spedd = $current_speed;
	}

	public function setState($state) {
		$this->state = $state;
	}
//End of activity 7.1b


//Activity 7.1c
	public function startEngine() {
		if($state) {
			print ("el vehículo " . $this->license_plate . "ya estaba en marcha. </br>");
		}else{
			$this->state = 'on';
			print ("El vehículo " . $this->license_plate . "se ha arrancado. </br>");
		}		
	}

	public function accelerate($acceleration = 1) {
		$this->current_speed = $this->current_speed + $acceleration;
		$this->fuel_level = $this->fuel_level - $acceleration;
		print ("El vehículo con " . $this->license_plate .  "ha incrementado su velocidad en " . $acceleration . ". La velocidad actual es " . $this->current_speed . ". El nivel de combustible es de " . $this->fuel_level . ".</br>");		
	}

	public function slowDown() {
		if ($this->current_speed < 1) {
			print ("El vehículo " . $this->license_plate . "se ha apagado. </br>");
		}else {
			--$this->current_speed;
			print ("El vehículo " . $this->license_plate . "ha decrementado su velocidad, su velocidad actual es de " . $this->current_speed . ".</br>");
		}
	}

	public function stopEngine() {
		if ($current_speed < 1 && $state == 'on') {
			$this->state = 'off';
			print ("El vehículo " . $this->license_plate . "se ha apagado. </br>"); 
		}else {
			print ("El vehículo " . $license_plate . "ya estaba apagado. </br>");
		}
	}

	public function fillTank($quantity) {
		if ($this->fuel_level > $this->fuel_capacity) {
			print ("El deposito está lleno " . $this->fuel_capacity . ". </br>"); 

		}else {
			print ("El vehículo " . $this->license_plate .  "se ha cargao con " . $quantity . "litros de combustible. </br>");
		}
	}
//End of activity 7.1c
}