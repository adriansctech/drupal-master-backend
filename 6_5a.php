<?php


$filename = 'php_example.log';
if (file_exists($filename) && filesize($filename) > 0) {
  $fp = fopen($filename, 'a+');
	$datos = $_SERVER['REMOTE_ADDR'] . "|" . time() . "|" . $_SERVER['HTTP_USER_AGENT'] . "\n";
	fwrite($fp, $datos);
	fclose($fp);
} else {
    print "El fichero no existe o está vacio";
}