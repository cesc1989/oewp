<?php
	session_start();

	$usuario = $_GET['usuario'];
	$contrasena = $_GET['contrasena'];
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];
	$edad = $_GET['edad'];

	$_SESSION['usuarioviejo']=$usuario;
?>

<form action="actualizarusuario.php" method="post">
	Usuario<input type="text" name="usuario" value="<?php echo $usuario; ?>" /><br />
	Contrasena<input type="text" name="contrasena" value="<?php echo $contrasena; ?>" /><br />
	Nombre<input type="text" name="nombre" value="<?php echo $nombre; ?>" /><br />
	Apellido<input type="text" name="apellido" value="<?php echo $apellido; ?>" /><br /><br />
	Edad<input type="text" name="edad" value="<?php echo $edad; ?>" /><br />
	<input type="submit" value="Actualizar" />
</form>