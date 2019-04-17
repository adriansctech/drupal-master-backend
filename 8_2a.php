<?php

class Subscription {

	public $month;

	public static function create($type, $month) {		
		if ($month < 6) {
			throw new Exception ("El mínimo contratable es de 6 meses </br>");
		}elseif ($month >= 6) {
			//First version with switch
			/*switch (strtolower($type)) {
				case 'regular':				
					return new RegularSubscription($month);
					break;
				case 'premium':				
					return new PremiumSubscription($month);
					break;
				default:
					throw new Exception ("Tipo de Subscripción no dipsonible </br>");
			}*/

			//Short version 
			$subscription = ucwords($type);
			if(class_exists($subscription)) {
				return new $subscription($month);
			} else {
				throw new Exception ("Tipo de Subscripción no dipsonible </br>");
			}			
		}
    
	}

	public function getType() {
		return get_class($this);
	}
	
}

class RegularSubscription extends Subscription {
	public function __construct($month){
		$this->month = $month;		
	}
}

class PremiumSubscription extends Subscription {
	public function __construct($month){
		$this->month = $month;		
	}
}
/*
First version to create subclass when use swicth control
Look when Subscription create
	'Subscription::create('regular', 6);' indicate type 
try {
	$subscription1 = Subscription::create('regular', 6);
	print("Se ha creado una suscripción del tipo " . $subscription1->getType() . " durante " . $subscription1->month ." meses </br>");	
} catch (Exception $e) {
	print($e->getMessage());
}

try {
	$subscription2 = Subscription::create('premium', 12);
	print("Se ha creado una suscripción del tipo " . $subscription2->getType() . " durante " . $subscription2->month ." meses </br>");
} catch (Exception $e) {
	print($e->getMessage());	
}

try {
	$subscription3 = Subscription::create('gold', 12);
	print("Se ha creado una suscripción del tipo " . $subscription3->getType() . " durante " . $subscription3->month ." meses </br>");
} catch (Exception $e) {
	print($e->getMessage());
}

try {
	$subscription4 = Subscription::create('premium', 3);
	print("Se ha creado una suscripción del tipo " . $subscription4->getType() . " durante " . $subscription4->month ." meses </br>");
} catch (Exception $e) {
	print($e->getMessage());	
}
*/

/*
Short version 
Look when instanciate subclass
	Subscriptio::create('RegularSubscription', 6); ->indicate name of subclass
 */
try {
	$subscription1 = Subscription::create('PremiumSubscription', 6);
	print("Se ha creado una suscripción del tipo " . $subscription1->getType() . " durante " . $subscription1->month ." meses </br>");	
} catch (Exception $e) {
	print($e->getMessage());
}
try {
	$subscription1 = Subscription::create('RegularSubscription', 6);
	print("Se ha creado una suscripción del tipo " . $subscription1->getType() . " durante " . $subscription1->month ." meses </br>");	
} catch (Exception $e) {
	print($e->getMessage());
}
try {
	$subscription3 = Subscription::create('GoldSubsciprtion', 12);
	print("Se ha creado una suscripción del tipo " . $subscription3->getType() . " durante " . $subscription3->month ." meses </br>");
} catch (Exception $e) {
	print($e->getMessage());
}
try {
	$subscription4 = Subscription::create('PremiumSubscription', 3);
	print("Se ha creado una suscripción del tipo " . $subscription4->getType() . " durante " . $subscription4->month ." meses </br>");
} catch (Exception $e) {
	print($e->getMessage());	
}