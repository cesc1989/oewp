<?php
	include('log.php');
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
			<th>Usuario</th>
			<th>COntrasena</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Edad</th>
			<th>Permisos</th>
		</tr>
	<?php
		mysql_select_db($bd,$conexion);
		$query = "SELECT * FROM usuarios";
		$resultado = mysql_query($query,$conexion);

		while($fila = mysql_fetch_array($resultado)){
			echo "<tr>";
			echo "<td>$fila[usuario]</td>";
			echo "<td>$fila[contrasena]</td>";
			echo "<td>$fila[nombre]</td>";
			echo "<td>$fila[apellido]</td>";
			echo "<td>$fila[edad]</td>";
			echo "<td>$fila[permisos]</td>";
			echo "<td><a href='eliminarusuario.php?usuario=$fila[usuario]&contrasena=$fila[contrasena]&nombre=$fila[nombre]&apellido=$fila[apellido]&edad=$fila[edad]'>Eliminar</a></td>";
			echo "<td><a href='formactualizarusuario.php?usuario=$fila[usuario]&contrasena=$fila[contrasena]&nombre=$fila[nombre]&apellido=$fila[apellido]&edad=$fila[edad]'>Actualizar</a></td>";
			echo "</tr>";
		}
	?>
	<tr>
		<form action="crearusuario.php" method="post">
			<td><input type="text" name="usuario" /></td>
			<td><input type="text" name="contrasena" /></td>
			<td><input type="text" name="nombre" /></td></td>
			<td><input type="text" name="apellido" /></td>
			<td><input type="text" name="edad" /></td>
			<td><input type="text" name="permisos" /></td>
			<td><input type="submit" value="Agregar" /></td>
		</form>
	</tr>
	</table>
</body>
<?php
	mysql_close($conexion);
}else{
	echo "<h1>No eres administrador y no se te permite ver esta area";
}
?>
</html>