<?php

$count = 0;
$terminar = 356;
$values = '0,';

while ( $count < $terminar) {
  if ($count % 2 != 0)  {    
      $values = $values . $count . ",";          
  }
  $count++;
}
print substr($values, 0, strlen($values) - 1); ;

