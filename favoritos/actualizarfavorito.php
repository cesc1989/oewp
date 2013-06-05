<?php
	session_start();
	include_once('conexion.php');

	$usuario = $_SESSION['usuario'];
	$contrasena = $_SESSION['contrasena'];
	$tituloviejo = $_SESSION['titulo'];
	$titulo = $_POST['titulo'];
	$direccion = $_POST['direccion'];
	$categoria = $_POST['categoria'];
	$comentario = $_POST['comentario'];
	$valoracion = $_POST['valoracion'];

	mysql_select_db($bd,$conexion);

	$consulta = "UPDATE favoritos SET titulo='".$titulo."', direccion='".$direccion."', categoria='".$categoria."', comentario='".$comentario."', valoracion='".$valoracion."' WHERE titulo='".$tituloviejo."'";

	$resultado = mysql_query($consulta,$conexion);
	if(!$resultado){
		echo "Error en la consulta ".mysql_error();
	}

	mysql_close($conexion);

	echo '<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php"
		</head>';
?>