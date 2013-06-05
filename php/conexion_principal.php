<?php
	$host="localhost";//mysql.webcindario.com
	$bd="otroespacio";
	$user="root";//otroespacio
	$pass="mypass";//paramore1
	$cone=mysql_connect($host,$user,$pass);
	if(!$cone){
		die('No se pudo conectar con el servidor '.mysql_error());
	}
?>