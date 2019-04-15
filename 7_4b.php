<?php

//Require abstract class -pet
require_once "7_4a.php";
require_once "7_6a.php";

class Cat extends Pet {
  
  use Insurance;
	private $name;
	public static $max_feed;
	private $feed = 0;

	function __construct($age, $name){
		parent::__construct($age);
		$this->name = $name;
		$max_feed = 5;
		$this->feed = 0;
	}

	public function feed($quantity){
		$this->feed = $this->feed + $quantity;
	}
  public function getName() {
    return $this->name;
  }

}