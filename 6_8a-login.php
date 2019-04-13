<?php

session_start();


if (!empty($_SESSION['loggedin'])) {

	print "Usuario " . $_SESSION['username'] . " en sesion";
	print ("</br>");
	print ("<a href='6_8a-logout.php'>Cerrar sessión</a>");

}else{

	print ("<!DOCTYPE html>");
	print ("<html lang='en'>");
	print ("<head>");
	print	("<meta charset='UTF-8'>");
	print	("<title>Formualrio forContu</title>");
	print ("</head>");
	print ("<body>");
	print 	("<form method='post' action='6_8a-process.php' >");
	print		("<label for='name'>Nombre de usuario: </label>");
	print		("<input type='text' id='name' name='username' />");
	print		("<br>");
	print		("<label for='password'>Contraseña: </label>");
	print		("<input type='password' id='password' name='password' />");
	print		("<br>");
	print 		("<input type='submit' />");
	print 	("</form>");	
	print("</body>");
	print("</html>");
}
?>

