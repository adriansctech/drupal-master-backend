<?php

$level;
$maxSalary = [];
$employees = [
  13 => [
    'firstname' => 'Mark',
    'lastname'  => 'Gil',
    'salary'     => 900
  ],
  3 => [
    'firstname' => 'Frank',
    'lastname'  => 'Williams',
    'salary'     => 2700
  ],
  42 => [
    'firstname' => 'Saul',
    'lastname'  => 'Goodman',
    'salary'     => 1800
  ]
];


foreach ($employees as $key => $value) {    
  switch ($value['salary']) {
    case $value['salary'] < 1000:
      $level = 'bajo';
      break;
    case $value['salary'] > 1000 && $value['salary'] < 2000:
      $level = 'medio';
      break;
    case $value['salary'] > 2000:    
      $level = 'alto';           
      $maxSalary = $key;      
      break;
  }
  echo "<ul>";
    echo "<li>" . $value['firstname'] ." " . $value['lastname'] ." (ID: " .$key . ")" . " tiene un salario de ".$value['salary'] . " (" . $level . ")" . "</li>";
  echo "</ul>";  
}

if($maxSalary) {    
  echo "<ul>";
    echo "<li>" . $employees[$maxSalary]['firstname'] ." " . $employees[$maxSalary]['lastname'] . "tiene el mayor salario de todos</li>";
  echo "</ul>";
}
