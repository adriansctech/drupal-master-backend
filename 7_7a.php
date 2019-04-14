<?php

require_once "7_4b.php";

//Create object of Cat class
$cat = new Cat("7", "Nauseabundo");

for ($i=0; $i < 10; $i++) { 
	try {
		$cat->feed(1);
		print ($cat->getName() . " puede seguir comiendo </br>");
	} catch (Exception $e) {
		print ($cat->getName() . " ya está bien alimentado </br>");
		break;
	}
	
}
print ("El seguro mensual para este gato es de " . $cat->calculateMonthlyFee("7"));