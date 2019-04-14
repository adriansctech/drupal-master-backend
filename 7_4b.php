<?php

//Require abstract class -pet
require_once "7_4a.php";

class Cat extends Pet {
	
	private $name;
	public static $max_feed;
	private $feed = 0;

	function __construct($age, $name){
		parent::__construct($age);
		$this->name = $name;
		$this->max_feed = 5;
		$this->feed = 0;
	}

	public function feed($quantity){
		$this->feed = $this->fedd + $quantity;
	}

}