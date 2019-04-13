<?php 


$strings = [
  " Lorem ipsum dolor sit amet drupal, consectetur adipiscing elit. Etiam sapien Drupal mauris, vestibulum quis mattis sit amet.",
  "Praesent elementum urna et Drupal condimentum DRUPAL vulputate blandit. Vestibulum eget ipsum Drupal sapien consequat vulputate Drupal. ",
  "Phasellus laoreet eu drupal orci et tincidunt. Quisque ac drupal gravida sem, non eleifend erat DrUPal."
];

$totalCharacters = 0;
$totalSpaces = 0;
$totalDrupal = 0;
foreach ($strings as $key => $value) {
	print  "</br>";
	$totalCharacters = $totalCharacters + strlen($value); 
	print "Numero de caracteres del string numero " . $key . " :" . strlen($value) . "</br>";	
	
	//Quitamos los espacios al principio y al final de cada cadena
	$value = trim($value);
	
	//Mostramos numero de espacios de cada cadena
	$totalSpaces = $totalSpaces + mb_substr_count($value, " ");
	print "El número de espacios de este string es: " . mb_substr_count($value, " ") . "</br>";
	
	//Sustituimos las variantes de la palabra DRUPAL
	$value = str_replace("drupal", "Drupal", strtolower($value), $count) . "</br>";

	//Mostramos el numero de veces que aparece la palabra drupal
	print "El numero de veces que aparece la palabra drupal en este estring es: " . $count . "</br>";
	//Incluimos el total de vaces que aparece la palabra drupal
	$totalDrupal = $totalDrupal + $count;

	//Remplazamos la palabra durpal por strong drupal
	$value = str_replace("drupal", "<strong>Drupal</strong>", strtolower($value), $count) . "</br>";

	//Recotarmos las cadenas a los primeros 100 carácteres
	print substr($value, 0, 100);
	print "</br>";
}
print "</br>";
print "---------------------------------------------------------------------------------------------------";
print "</br>";
print "Total de caracteres en todos los STRINGS: " . $totalCharacters . "</br>";
print "Total de espacios en blanco : " . $totalSpaces . "</br>";
print "El numero total de veces que aparece la palabra DRUPAL es: " . $totalDrupal . "</br>";


