<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Listado de docentes</title>
	<link rel="stylesheet" href="../estilo-sitio.css" type="text/css" />
	<link rel="stylesheet" href="../reset.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../buttons.css" media="screen" />
</head>
<body>
	<div id="contenedor-cabeza">
	<header class="envoltura">
		<h1><a href="../index.html" title="">PHP: clase 2012</a></h1>
	</header>
	</div>
	<div id="contenedor-cuerpo">
	<section class="envoltura">
		<h1>Docentes de la universidad</h1>
		<?php
			mysql_select_db($bd,$cone);
			$consulta="select codprof,nombres,apellidos from profesores";
			$resultado=mysql_query($consulta,$cone);
			if(!$resultado)
			{
				die("Consulta invalida ".mysql_error());
			}
			else
			{
				echo "<table>";
				echo "<tr>";
				echo "<th>Nombres</th>";
				echo "<th>Apellidos</th>";
				echo "</tr>";
				echo "<tr>";
				while($resul=mysql_fetch_assoc($resultado))
				{
					echo "<td>";
					echo "<a href=listadodeprof.php?codigo=".$resul['codprof'].">".$resul['nombres']."</a>";
					echo"</td>";
					echo "<td>";
					echo $resul['apellidos'];
					echo"</td>";
					echo "</tr>";
				}
				mysql_free_result($resultado);
				echo "</table>";
			}
			mysql_close($cone);
		?>
		<br /><a href="manejo.php" class="button orange" title="Administrar">Administrar docentes</a>
		<br /><a href="menu-bd.html" class="button blue" title="Atras">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
