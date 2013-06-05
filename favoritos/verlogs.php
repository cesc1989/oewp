<?php
	session_start();
	include_once('conexion.php');
	$codigo = $_SESSION['permisos'];

	if($codigo == 1){
?>
<html>
<head>
	<title>Aplicacion de favoritos</title>
</head>
<body>
	<h1>Gestionando los usuarios</h1>
	<h2>Datos pasados por las variables de sesion</h2>
	<?php
		echo $_SESSION['usuario']."<br />";
		echo $_SESSION['contrasena'];
	?>
	<h3>Datos extraidos de la base de datos</h3>
	<table border="1" width="100%">
		<tr>
			<th>UTC</th>
			<th>Anio</th>
			<th>Mes</th>
			<th>Dia</th>
			<th>Hora</th>
			<th>Minuto</th>
			<th>Segundo</th>
			<th>IP</th>
			<th>Navegador</th>
			<th>Usuario</th>
			<th>Contrasena</th>
		</tr>
	<?php
		mysql_select_db($bd,$conexion);
		$query = "SELECT * FROM logs";
		$resultado = mysql_query($query,$conexion);

		while($fila = mysql_fetch_array($resultado)){
			echo "<tr>";
			echo "<td>$fila[utc]</td>";
			echo "<td>$fila[anio]</td>";
			echo "<td>$fila[mes]</td>";
			echo "<td>$fila[dia]</td>";
			echo "<td>$fila[hora]</td>";
			echo "<td>$fila[minuto]</td>";
			echo "<td>$fila[segundo]</td>";
			echo "<td>$fila[dirip]</td>";
			echo "<td>$fila[navegador]</td>";
			echo "<td>$fila[usuario]</td>";
			echo "<td>$fila[contrasena]</td>";
			echo "</tr>";
		}
	?>
	</table>
</body>
<?php
	mysql_close($conexion);
}else{
	echo "<h1>No eres administrador y no se te permite ver esta area";
}
?>
</html>