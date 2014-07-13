<?php
$host="localhost";//mysql5.000webhost.com
$bd="otroespacio";//a7029159_php2012";
$user="root";//a7029159_php";
$pass="";//123456a";
$cone=mysql_connect($host,$user,$pass);
if(!$cone)
{
 die('No se pudo conectar con el servidor '.mysql_error());
}else{
	echo "se conecto";
}
?>
