<?php

$filename = 'php_example.log';

//Check if file exists and size
if (file_exists($filename) && filesize($filename) > 0) {

  //Open file
  $fp = fopen($filename, 'r');
  $values = [];

  //Read content of file and put this in array
  while(!feof($fp))
  {    
    $values [] = explode("|", fgets($fp));
  }	

  //Close file
  fclose($fp);

  foreach ($values as $key => $value) {

    if ($value[0] && $value[1]) {

      print "La IP es: ". $value[0] . "</br>";
      print "La fecha es: " . gmdate("d-m-Y-H:s", $value[1]) . "</br>";
      print "La cadena userAgent es: " . $value[2] .  "</br>";

    }
  }

  //If content of file > 4 lines
  if (sizeof($values) > 4) {

  	//check of logs folder exists
    if (!file_exists("logs/")) {
    	
    	try {		    
		    mkdir("logs/" , 0777);
		} catch (\Exception $e) {
		    throw new \Exception($e->getMessage(), System::CAN_NOT_MAKE_DIRECTORY);
		} 		
    }
    copy($filename,"logs/" . "php_example" . time() . "log");
	unlink($filename);	
	$datos = $_SERVER['REMOTE_ADDR'] . "|" . time() . "|" . $_SERVER['HTTP_USER_AGENT'] . "\n";
	$newFile = "php_example.log";
	file_put_contents($newFile, $datos, FILE_APPEND);		
  }

} else {
    print "El fichero no existe o está vacio";
}