<?php

session_start();
include_once('conexion.php');

$utc = date('U');
$anio = date('Y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$minuto = date('i');
$segundo = date('s');
@$ip = getenv(REMOTE_ADDR);
$navegador = $_SERVER['HTTP_USER_AGENT'];

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

mysql_select_db($bd,$conexion);

$consulta = "INSERT INTO logs (utc,anio,mes,dia,hora,minuto,segundo,dirip,navegador,usuario,contrasena) VALUES('".$utc."','".$anio."','".$mes."','".$dia."','".$hora."','".$minuto."','".$segundo."','".$ip."','".$navegador."','".$usuario."','".$contrasena."')";

$resultado = mysql_query($consulta,$conexion);
if(!$resultado){
	echo "Error en la consulta ".mysql_error();
}
?>