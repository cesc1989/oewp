<?php
	session_start();
	include_once('conexion.php');

	$usuario = $_SESSION['usuario'];
	$contrasena = $_SESSION['contrasena'];
	$titulo = $_GET['titulo'];
	$direccion = $_GET['direccion'];
	$categoria = $_GET['categoria'];
	$comentario = $_GET['comentario'];
	$valoracion = $_GET['valoracion'];

	mysql_select_db($bd,$conexion);

	$consulta = "DELETE FROM favoritos WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

	$resultado = mysql_query($consulta,$conexion);
	if(!$resultado){
		echo "Error en la consulta ".mysql_error();
	}

	mysql_close($conexion);

	echo '<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php"
		</head>';
?>