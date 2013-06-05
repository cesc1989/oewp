<?php
	session_start();
	include_once('conexion.php');

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	mysql_select_db($bd,$conexion);

	$consulta = "SELECT * FROM usuarios";

	$resultado = mysql_query($consulta,$conexion);
	if(!$resultado){
		echo "Usuaro inexistente. <a href='registro.php'>Registrse</a> O revisa bien tus datos e intenta de nuevo";
		echo "Error en la consulta ".mysql_error();
	}

	while($fila = mysql_fetch_array($resultado)){
		$usuariobd = $fila['usuario'];
		$contrasenabd = $fila['contrasena'];
		$permisosenbd = $fila['permisos'];

		if($usuario == $usuariobd && $contrasena == $contrasenabd){
			$_SESSION['usuario'] = $usuario;
			$_SESSION['contrasena'] = $contrasena;
			$_SESSION['permisos'] = $permisosenbd;
			echo "<head>
					<meta http-equiv='REFRESH' content='0;url=principal.php'>
				</head>";
		}else{
			
		}
	}

?>