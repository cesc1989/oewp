<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Listado de programas</title>
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
		<h1>Programas de la universidad</h1>
		<?php
		$codigo=$_GET['codigo'];
		$descripcion=$_GET['descripcion'];
			mysql_select_db($bd,$cone);
			$consulta="update programa set descripcion='$descripcion' where codpro='$codigo'";
			$resultado=mysql_query($consulta,$cone);
			if(!$resultado)
			{
				die("Consulta invalida ".mysql_error());
			}
			else
			{
				echo "<p>Consulta satisfactoriamente completada</p>";
			}
			mysql_close($cone);
		?>
		<br /><a href="manejopro.php" class="button round pink glass" title="Administrar">Administrar programas</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
