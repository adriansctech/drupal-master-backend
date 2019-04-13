<?php

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];	


if (preg_match("/^[a-z][a-zA-Z]{8,}/", $name)) {		

	print "Nombre: " . $name . "</br>";	
}else {
	print "Nombre: " . $name . "(no válido)</br>";
}	

print "Apellidos: ". $lastname . "</br>";
print "Nombre de usuario: " . $username . "</br>";	

if (preg_match("/[a-zA-Z0-9]{10,}[.\/_]{1,}/", $password)) {

	print md5($password);
}else {
	print "Contraseña: " . $password . "(no válida)</br>";	
}

