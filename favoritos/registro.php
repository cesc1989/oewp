<html>
<head>
	<title>Registro en favoritos app</title>
</head>
<body>

	<h1>Incia sesion</h1>
	<form action="login.php" method="post">
		Usuario<input type="text" name="usuario" /><br />
		Contrasena<input type="password" name="contrasena" /><br />
		<input type="submit" value="Ingresar" />
	</form>
	<br />
	<h2>Si no estas registrado, hazlo aca abajo</h2>
	<form action="registrar.php" method="post">
		Usuario<input type="text" name="usuario" /><br />
		Contrasena<input type="password" name="contrasena" /><br />
		Nombre<input type="text" name="nombre" /><br />
		Apellido<input type="text" name="apellido" /><br />
		Edad<input type="text" name="edad" size="5" /><br />
		<input type="submit" value="Registrarse" />
	</form>
</body>
</html>