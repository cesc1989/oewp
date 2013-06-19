<?php
	$host="localhost";//mysql.webcindario.com
	$bd="favoritos";//otroespacio
	$user="root";//otroespacio
	$pass="mypass";//paramore1
	$conexion=mysql_connect($host,$user,$pass);
	if(!$conexion){
		die('No se pudo conectar con el servidor '.mysql_error());
	}
?>
