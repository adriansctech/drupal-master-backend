<?php

class User {

	private static $instance;
	private $name;

	public static function getInstance($name) {
		if (!isset(self::$instance)) {
			self::$instance = new self($name);
		}
		return self::$instance;
	}

	private function __construct($name) {
		$this->name = $name;
	}		

	private function __clone () {}

	public function getName (){
		return $this->name;
	}

}

//Try to instanciate one object classic style
//$user1 = new User("adri");	

$user2 = User::getInstance("adri");
print($user2->getName() . "</br>");
$user3 = User::getInstance("facundo");
print($user3->getName() . "</br>");