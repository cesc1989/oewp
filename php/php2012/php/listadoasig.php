<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Listado de asignaturas</title>
	<link rel="stylesheet" href="../reset.css" type="text/css" />
	<link rel="stylesheet" href="../estilo-sitio.css" type="text/css" />
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
		<h1>Asignaturas de la universidad</h1>
		<?php
			mysql_select_db($bd,$cone);
			$consulta="select asignaturas.descripcion as asignatura ,semestre, profesores.nombres as nombres , profesores.apellidos as apellidos , programa.descripcion as programa from asignaturas, profesores, programa where asignaturas.codprof=profesores.codprof and asignaturas.codpro=programa.codpro";
			$resultado=mysql_query($consulta,$cone);
			if(!$resultado)
			{
				die("Consulta invalida ".mysql_error());
			}
			else
			{
				echo "<table>";
				echo "<tr>";
				echo "<th>Asignatura</th>";
				echo "<th>Semestre</th>";
				echo "<th>Profesores</th>";
				echo "<th>Programa</th>";
				echo "</tr>";
				echo "<tr>";
				while($resul=mysql_fetch_assoc($resultado))
				{
					echo "<td>";
					echo $resul['asignatura'];
					echo"</td>";
					echo "<td>";
					echo $resul['semestre'];
					echo"</td>";
					echo "<td>";
					echo $resul['nombres']." ". $resul['apellidos'];
					echo"</td>";
					echo "<td>";
					echo $resul['programa'];
					echo"</td>";
					echo "</tr>";
				}
				mysql_free_result($resultado);
				echo "</table>";
			}
			mysql_close($cone);
		?>
		<br /><a href="manejoasig.php" class="button orange" title="Administrar">Administrar asignaturas</a>
		<br /><a href="menu-bd.html" class="button blue" title="Atras">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
