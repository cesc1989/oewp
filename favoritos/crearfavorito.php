<?php
	session_start();
	include_once('conexion.php');

	$usuario = $_SESSION['usuario'];
	$contrasena = $_SESSION['contrasena'];
	$titulo = $_POST['titulo'];
	$direccion = $_POST['direccion'];
	$categoria = $_POST['categoria'];
	$comentario = $_POST['comentario'];
	$valoracion = $_POST['valoracion'];

	mysql_select_db($bd,$conexion);

	$consulta = "insert into favoritos (usuario,contrasena,titulo,direccion,categoria,comentario,valoracion) values('".$usuario."','".$contrasena."','".$titulo."','".$direccion."','".$categoria."','".$comentario."','".$valoracion."')";

	$resultado = mysql_query($consulta,$conexion);
	if(!$resultado){
		echo "Error en la consulta ".mysql_error();
	}

	echo '<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php"
		</head>';
?>