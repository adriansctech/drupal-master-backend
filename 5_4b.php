<?php

include '5_4a.php';

$numeros[] = [
    "num1" => 41,
    "num2" => 2.1
];

$numeros[] = [
    "num1" => 3,
    "num2" => 67    
];

$numeros[] = [
	"num1" => 145,
	"num2" => 0
];


$operaciones = [
    'suma' => '+',
    'resta' => '-',
    'division' => '/',
    'multiplicacion' => '*',
    'resto' => '%'
];

foreach ($numeros as $key => $numero) {	

	foreach ($operaciones as $key => $operacion) {		

		$result =  calculadora($numero['num1'], $numero['num2'], $key);		
		
		if ($result == 'ERROR0') 
			$result = 'Error de división por cero';

		echo $numero["num1"] . ' ' . $operacion . ' ' . $numero["num2"] . ' = ' . $result . '</br>';
		
	}
}