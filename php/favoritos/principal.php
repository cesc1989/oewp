<?php
	include('log.php');
	include_once('conexion.php');
?>
<!DOCTYPE html>
<head>
	<title>Otro Espacio Web Practicas || PHP, Favoritos App</title>
	<meta charset="utf-8" />
	<meta name="keywords" content="php,codigo php,tablas con php,mysql,consultas php,insercion con php,manejo de php,datos con php" />
	<link rel="shortcut icon" href="../../imagenes/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="screen" href="../../css/estilo.css" />
	<style type="text/css">
		div#contenedor-cuerpo{
			padding-bottom: 15px;
		}
		table{
			padding: 0;
			margin: 0;
		}
	</style>
</head>
<body>
<!--[if IE]>
<div id="usuarios-ie"><p>Debido a que estas usando Internet Explorer no puedes disfrutar de una navegacion de calidad.Te recomiendo pruebes un <b>BUEN</b> navegador como <a href="http://www.mozilla.com" title="Firefox web browser">Firefox</a>, o <a href="http://www.google.com/chrome" title="Google Chrome">Chrome</a></p></div>
<![endif]-->
	<div id="contenedor-cabeza">
		<div class="envoltura">
			<a class="logo" href="../../index.html" title="Inicio">Otro Espacio Web Practicas</a>
			<nav>
				<ul class="menu">
					<li><a href="../../index.html" title="Inicio">Inicio</a></li>
					<li><a class="actual" href="../" title="PHP/MySQL">PHP/MySQL</a></li>
					<li><a href="../../html5/" title="HTML5">HTML5</a></li>
					<li><a href="../../jquery/" title="jQuery">jQuery</a></li>
					<li><a href="../../prezi/" title="Prezi">Prezi</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="contenedor-cuerpo">
		<div class="envoltura">
			<h1>Favoritos App</h1>
			<!--<h2>Datos pasados por las variables de sesion</h2>-->
			<?php
				/*echo $_SESSION['usuario']."<br />";
				echo $_SESSION['contrasena'];*/
			?>
			<h3>Tus favoritos</h3>
			<table>
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
					<td><input type="text" size="10" name="titulo" /></td>
					<td><input type="text" size="10" name="direccion" /></td>
					<td><select name="categoria">
						<option value="salud">Salud</option>
						<option value="internet">Internet</option>
						<option value="comida">Comida</option>
					</td>
					<td><input type="text" size="10" name="comentario" /></td>
					<td><input type="text" size="5" name="valoracion" /></td>
					<td><input type="submit" value="Agregar" /></td>
				</form>
			</tr>
			</table>
			<!-- PARTE SOCIAL -->
			<?php 
				//function muestraCategoria(){

					echo "<h3>Los favoritos de otros</h3>
						<table>
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
		</div>
	</div>
	<div id="contenedor-pie">
		<div class="envoltura">
			<span>&copy;Otro Espacio Web Practicas.</span>
			<ul class="menu">
				<li><a href="../../contacto.html" title="Contacto">Contacto</a></li>
				<li><a href="../../desarrolladores.html" title="Creador">Creador</a></li>
				<li><a href="../../mapa-sitio.html" title="Mapa del sitio">Mapa del sitio</a></li>
			</ul>
		</div>
	</div>
</body>
<script type="text/javascript" src="../../js/cufon-yui.js"></script>
<script type="text/javascript" src="../../js/cufon-replace.js"></script>
<script type="text/javascript" src="../../js/Bascula_400.font.js"></script>
</html>