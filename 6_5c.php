<?php

$csvFile = 'csv/SampleCSV.csv';
$result= [];

//Check if file exist and size
if (file_exists($csvFile) && filesize($csvFile) > 0) {

	//Open csv file
	$file = fopen($csvFile,"r");

	//Read all csv file
	while (($row = fgetcsv($file, 0, ",")) !== FALSE) {
	    //Save lines into array
	    $result [] = $row;
	    
	}
	//Close file
	fclose($file);
	
}else{

	print "no se ha podido encontrar el fichero o que el fichero está vacío";

}

//Print html table
echo "<table>";
echo "<tbody>";
echo "<tr>";
foreach ($result as $key => $value) {
	echo "<td>" . $value[0];
	echo "<td>" . $value[1];
	echo "<td>" . $value[2];
	echo "<td>" . $value[3];
	echo "<td>" . $value[4];
	echo "<td>" . $value[5];
	echo "<td>" . $value[6];
	echo "<td>" . $value[7];
	echo "<td>" . $value[8];
	echo "<td>" . $value[9];
	echo "</td></td></td></td></td></td></td></td></td></tr>";
}
echo "</tbody>";
echo "</table>";