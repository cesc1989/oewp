<?php
session_start();
include_once('conexion.php');
$contador = 0;

mysql_select_db($bd,$conexion);

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$permisos = $_POST['permisos'];

//	Comprobacion de usuarios

$consutalusuarios = "SELECT * FROM usuarios";

$resultadousuarios = mysql_query($consutalusuarios,$conexion);

while($fila = mysql_fetch_array($resultadousuarios)){
	if($fila['usuario'] == $usuario){
		$contador++;
	}
}

/*
	Permisos

	1=admin
	2=controlador
	3=registrado
	4=invitado
*/

if($contador == 0){

	$consulta = "INSERT INTO usuarios (usuario,contrasena,nombre,apellido,edad,permisos) VALUES ('".$usuario."','".$contrasena."','".$nombre."','".$apellido."','".$edad."',$permisos)";

	$resultado = mysql_query($consulta,$conexion);
	if(!$resultado){
		echo "Error en la consulta ".mysql_error();
	}else{
		echo "<head>
				<meta http-equiv='REFRESH' content='0;url=gestiondeusuarios.php'>
			</head>";
	}
}else{
	echo "Nombre de usuario existente. Cambialo, por favor";
	echo "<head>
				<meta http-equiv='REFRESH' content='3;url=gestiondeusuarios.php'>
			</head>";
}
mysql_close($conexion);

?>