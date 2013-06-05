<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Asignaturas por programa</title>
	<link rel="stylesheet" href="../estilo-sitio.css" type="text/css" />
	<link rel="stylesheet" href="../reset.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../buttons.css" media="screen" />
</head>
<body>
	<div id="contenedor-cabeza">
	<header class="envoltura">
		<h1><a href="../index.html" title="Inicio">PHP: clase 2012</a></h1>
	</header>
	</div>
	<div id="contenedor-cuerpo">
	<section class="envoltura">
		<h1>Listado de asignaturas por programa</h1>
		<?php
			mysql_select_db($bd,$cone);
			$codigo=$_GET['codigo'];
			$consulta="select descripcion,semestre from asignaturas where codpro='$codigo'";
			$resultado=mysql_query($consulta,$cone);
			if(!$resultado)
			{
				die("Consulta invalida ".mysql_error());
			}
			else
			{
				echo "<table>";
				echo "<tr>";
				echo "<th>Descripcion</th>";
				echo "<th>Semestre</th>";
				echo "</tr>";
				echo "<tr>";
				while($resul=mysql_fetch_assoc($resultado))
				{
					echo "<td>";
					echo $resul['descripcion'];
					echo"</td>";
					echo "<td>";
					echo $resul['semestre'];
					echo"</td>";
					echo "</tr>";
				}
				mysql_free_result($resultado);
				echo "</table>";
			}
			mysql_close($cone);
		?>
		<br /><a href="listadospro.php" class="button skew glass" title="Atras">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
