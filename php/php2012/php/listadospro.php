<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Lista de programas</title>
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
		<h1>Programas universitarios</h1>
		<?php
			mysql_select_db($bd,$cone);
			$consulta="select codpro,descripcion from programa";
			$resultado=mysql_query($consulta,$cone);
			if(!$resultado)
			{
				die("Consulta invalida ".mysql_error());
			}
			else
			{
				echo "<table>";
				echo "<tr>";
				echo "<th>Nombre del programa</th>";
				echo "</tr>";				
				while($resul=mysql_fetch_assoc($resultado))
				{	echo "<tr>";
					echo "<td>";
					echo "<a href='listadodeprog.php?codigo=".$resul['codpro']."'>".$resul['descripcion']."</a>";
					echo"</td>";
					echo "</tr>";
				}
				mysql_free_result($resultado);
				echo "</table>";
			}
			mysql_close($cone);
		?>
		<br /><a href="manejopro.php" class="button orange glossy" title="Manejo de programas">Administraci&oacute;n de programas</a>
		<br /><a href="menu-bd.html" class="button blue glossy" title="Atras">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
