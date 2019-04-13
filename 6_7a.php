<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Forcontu</title>
</head>
<body>
	<form method="post" action="6_7b.php">
		<label for="name">Nombre</label>
		<input type="text" id="name" name="firstname" />
		<br>
		<label for="surname">Apellidos</label>
		<input type="text" id="surname" name="lastname" />		
		<br>
		<label for="country">País</label>
		<select name="country">			
		</select>
		<br>
		<label for="username">Nombre de usuario:</label>
		<input type="text" id="username" name="username">
		<br>
		<label for="password">Contraseña</label>
		<input type="password" id="password" name="password">
		<br>
		<input type="submit" />
	</form>
</body>
</html>