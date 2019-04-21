<?php
/*
	Crea el script /8_7a.php. Siguiendo el ejemplo del apartado 8.7:
 */

//- Crea las clases del ejemplo y comprueba su funcionamiento.
class Product implements SplSubject {
	private $observers;
	private $name;
	private $original_price;
	private $current_price;

	public function __construct($name, $original_price) {
		//contenedor de objetos
		$this->observers = new SplObjectStorage();
		$this->name = $name;
		$this->original_price = $original_price;
		$this->current_price = $original_price;
	}

	public function attach(SplObserver $observer) {
		$this->observers->attach($observer);
	}	
	public function detach(SplObserver $observer) {
		$this->observers->detach($observer);
	}
	public function notify() {
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}
	public function setNewPrice($new_price) {
		echo 'Product ' . $this->name . ' has a new price of <b>' .
		$this->current_price . '</b><br>';
		$this->current_price = $new_price;
		$this->notify();
	}
	public function getPrice() {
		return $this->current_price;
	}
	public function getName() {
		return $this->name;
	}
}

class Buyer implements SplObserver{
	private $username;
	public function __construct($username) {
		$this->username = $username;
	}
	public function update(SplSubject $subject) {
		echo $this->username . ' has been notified of the new price of
	<b>' . $subject->getName() . ' (' . $subject->getPrice() . ')</b><br>';
	}
}

$buyer1 = new Buyer("Fran");
$buyer2 = new Buyer("Laura");
$buyer3 = new Buyer("Mark");
$product1 = new Product("Bycicle MX2", 350);
$product1->attach($buyer1);
$product1->attach($buyer2);
$product2 = new Product("Motorbike Yamaha", 2100);
$product2->attach($buyer2);
$product2->attach($buyer3);

$product1->setNewPrice(325);
$product2->setNewPrice(2050);
