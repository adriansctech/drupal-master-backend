<?php

$numbers = [3, 45, 22, 12, 33, 23, 44, 1, 121];
$countPars = 0;

foreach ($numbers as $key => $value) {	
	if ($value % 2 == 0){
		++$countPars;
	}
	
}

print "Numero de elementos del array: " . sizeof($numbers). "</br>";
print "EL numero de valores pares es: " . $countPars . "</br>";
print "El numero de valores impares es: " . (sizeof($numbers) - $countPars) . "</br>";

//Order array ASC
sort($numbers);

//String
$values = "5:76:7:8";

//change to array
$morenumbers = explode(':', $values);

//Parse array of string into array of int
foreach ($morenumbers as $key => $value) {
	$morenumbers[$key] = (int)$value;	
}

//Merge two arrays
$numbers = array_merge($numbers, $morenumbers);

//Order array DESC
rsort($numbers);

//Printr array
print_r($numbers);
