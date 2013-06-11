<?php
	include('log.php');
	include_once('conexion.php');
?>
<html>
<head>
	<title>Aplicacion de favoritos</title>
</head>
<body>
	<h1>Favoritos App</h1>
	<h2>Datos pasados por las variables de sesion</h2>
	<?php
		echo $_SESSION['usuario']."<br />";
		echo $_SESSION['contrasena'];
	?>
	<h3>Datos extraidos de la base de datos</h3>
	<table border="1" width="100%">
		<tr>
			<th>Titulo</th>
			<th>Direccion</th>
			<th>Categoria</th>
			<th>Comentario</th>
			<th>Valoracion</th>
		</tr>
	<?php
		mysql_select_db($bd,$conexion);
		$query = "SELECT * FROM favoritos WHERE usuario='$_SESSION[usuario]'";
		$resultado = mysql_query($query,$conexion);

		while($fila = mysql_fetch_array($resultado)){
			echo "<tr>";
			echo "<td>$fila[titulo]</td>";
			echo "<td>$fila[direccion]</td>";
			echo "<td>$fila[categoria]</td>";
			echo "<td>$fila[comentario]</td>";
			echo "<td>$fila[valoracion]</td>";
			echo "<td><a href='eliminarfavorito.php?titulo=$fila[titulo]&direccion=$fila[direccion]&categoria=$fila[categoria]&comentario=$fila[comentario]&valoracion=$fila[valoracion]'>Eliminar</a></td>";
			echo "<td><a href='formactualizar.php?titulo=$fila[titulo]&direccion=$fila[direccion]&categoria=$fila[categoria]&comentario=$fila[comentario]&valoracion=$fila[valoracion]'>Actualizar</a></td>";
			echo "</tr>";
		}
	?>
	<tr>
		<form action="crearfavorito.php" method="post">
			<td><input type="text" name="titulo" /></td>
			<td><input type="text" name="direccion" /></td>
			<td><select name="categoria">
				<option value="salud">Salud</option>
				<option value="internet">Internet</option>
				<option value="comida">Comida</option>
			</td>
			<td><input type="text" name="comentario" /></td>
			<td><input type="text" name="valoracion" /></td>
			<td><input type="submit" value="Agregar" /></td>
		</form>
	</tr>
	</table>
	<!-- PARTE SOCIAL -->
	<?php 
		//function muestraCategoria(){

			echo "<h3>Tal vez podria interesarte</h3>
				<table border=1 width=100%>
				<tr>
				<th>Titulo</th>
				<th>Direccion</th>
				<th>Categoria</th>
				<th>Comentario</th>
				<th>Valoracion</th>
				</tr>";

			$consulta = "SELECT * FROM favoritos WHERE usuario !='".$_SESSION['usuario']."' LIMIT 5";
			$resultado = mysql_query($consulta,$conexion);
			while($fila = mysql_fetch_array($resultado)){
				echo "<tr>";
				echo "<td>$fila[titulo]</td>";
				echo "<td>$fila[direccion]</td>";
				echo "<td>$fila[categoria]</td>";
				echo "<td>$fila[comentario]</td>";
				echo "<td>$fila[valoracion]</td>";
				echo "</tr>";
			}
			echo "</table>";
		//}

		//muestraCategoria();

		mysql_close($conexion);
	?>
</body>
</html>