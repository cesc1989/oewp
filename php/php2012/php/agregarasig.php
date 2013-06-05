<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Administraci&oacute;n de asignaturas</title>
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
		<h1>Asignaturas de la universidad</h1>
		<?php
			mysql_select_db($bd,$cone);
			$nombre=$_GET['nombre'];
			$semestre=$_GET['semestre'];
			$codo=$_GET['codigo'];
			$copo=$_GET['programa'];
			$consulta="insert into asignaturas (descripcion,semestre,codpro,codprof)values('$nombre','$semestre','$codo','$copo')";
			$resultado=mysql_query($consulta,$cone);
			if(!$resultado)
			{
				die("Consulta invalida ".mysql_error());
			}
			else
			{
				print "<p>Proceso completado a satisfacion.</p>";
			}
			mysql_close($cone);
		?>
	<br /><a href="manejoasig.php" class="button glass knife">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
