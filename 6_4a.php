<?php

$dates = [
  ['day' => 3, 'month' => 12, 'year' => 2005],
  ['day' => 30, 'month' => 2, 'year' => 2017],
  ['day' => 7, 'month' => 9, 'year' => 2019],
  ['day' => 1, 'month' => 11, 'year' => 2014]
];


foreach ($dates as $key => $value) {	

	if (!checkdate($value['month'], $value['day'], $value['year'])) {
		unset($dates[$key]);		
	}

}
$fecha = new DateTime();
$dateUnix =  $fecha->getTimestamp();
$normalDate = gmdate("d-m-Y", $dateUnix);
$dateToArray = explode("-", $normalDate);

$dates[] = [
	'day' => (int)$dateToArray[0],
	'month' => (int)$dateToArray[1],
	'year' => (int)$dateToArray[2]
];

var_dump($dates);
