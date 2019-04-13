<?php

function calculadora ($num1, $num2, $operacion = 'suma') {
  $operacion = strtolower($operacion);
  $result = '';

  switch ($operacion) {
    case 'suma':
      $result = $num1 + $num2;
      break;
    case 'resta':
      $result = $num1 - $num2;
      break;
    case 'division':
      if ($num2 < 1) {
        $result = 'ERROR0';
      }else{
        $result = $num1 / $num2;  
      }      
      break;
    case 'multiplicacion':
      $result =  $num1 * $num2;
      break;
    case 'resto':
      $result =  $num1 % $num2;
      break;
    }

    return $result;
    
}

//Examples

//Example for sum
//calculadora (2,3);
//calculadora (2,3, 'suma');

//example for division
//calculadora(6,0, 'division');