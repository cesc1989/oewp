<?php
	session_start();
	include_once('conexion.php');

	/*$usuario = $_SESSION['usuario'];
	$contrasena = $_SESSION['contrasena'];*/
	$usuarioviejo = $_SESSION['usuarioviejo'];
	
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];

	mysql_select_db($bd,$conexion);

	$consulta = "UPDATE usuarios SET usuario='".$usuario."', contrasena='".$contrasena."', nombre='".$nombre."', apellido='".$apellido."', edad='".$edad."' WHERE usuario='".$usuarioviejo."'";

	$resultado = mysql_query($consulta,$conexion);
	if(!$resultado){
		echo "Error en la consulta ".mysql_error();
	}

	mysql_close($conexion);

	echo '<head>
		<meta http-equiv="REFRESH" content="0;url=gestiondeusuarios.php"
		</head>';
?>