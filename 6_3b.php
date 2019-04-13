<?php


$countries = [
  'uk' => 'United Kingdom',
  'fr' => 'France',
  'pt' => 'Portugal',
  've' => 'Venezuela',
  'at' => 'Austria',
  'es' => 'Spain',
  'co' => 'Colombia'
];

$myCountry = "Spain";

if (in_array($myCountry, $countries)) {
	print "Mi pais de origen es " . $myCountry . " y está en la lista";
}else{
	print "Mi pais de origen es " . $myCountry . " pero no está en la lista";
}
print "</br>";	
asort($countries);
print_r($countries);

print "</br>";

$result = implode(", ", $countries);
print $result;