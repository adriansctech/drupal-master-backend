<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (($username === 'admin' && $password === 'forcontu') || ($username === 'demouser' && $password === 'forcontu')){

		session_start();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['username'] = $username;
		print "Los datos son correctos";		
	}

	echo "<a href=".'6_8a-login.php'.">Volver al formulario</a>";