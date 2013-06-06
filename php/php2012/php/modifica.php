<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Listado de docentes</title>
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
		<h1>Docentes de la universidad</h1>
		<?php
		$codigo=$_GET['codigo'];
		$nombre=$_GET['nombre'];
		$apellido=$_GET['apellido'];
			mysql_select_db($bd,$cone);
			$consulta="update profesores set nombres='$nombre',apellidos='$apellido' where codprof='$codigo'";
			$resultado=mysql_query($consulta,$cone);
			if(!$resultado)
			{
				die("Consulta invalida ".mysql_error());
			}
			else
			{
				echo "<p>Proceso completado</p>";
			}
			mysql_close($cone);
		?>
		<br /><a href="manejo.php" class="button oval green glossy" title="Administrar">Administrar docentes</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
