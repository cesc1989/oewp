<?php
	session_start();
	include_once('conexion.php');

	$usuario = $_SESSION['usuario'];
	$contrasena = $_SESSION['contrasena'];
	$usuario = $_GET['usuario'];
	$contrasena = $_GET['contrasena'];
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];
	$edad = $_GET['edad'];

	mysql_select_db($bd,$conexion);

	$consulta = "DELETE FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND nombre='".$nombre."' AND apellido='".$apellido."' AND edad='".$edad."'";

	$resultado = mysql_query($consulta,$conexion);
	if(!$resultado){
		echo "Error en la consulta ".mysql_error();
	}

	mysql_close($conexion);

	echo '<head>
		<meta http-equiv="REFRESH" content="0;url=gestiondeusuarios.php"
		</head>';
?>