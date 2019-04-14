<?php

abstract class Pet {

	public $age;

	public function __construct($age) {
		$this->age = $age;		
	}	

	abstract public function feed($quantity);
}