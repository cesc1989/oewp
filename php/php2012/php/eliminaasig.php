<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Administraci&oacute;n de docentes</title>
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
		<h1>Resultado de la operaci&oacute;n</h1>
		<?php 
			mysql_select_db($bd,$cone);
			$codigo=$_GET['codigo'];
			$consulta="delete from asignaturas where codasig='$codigo'";
			$resultado=mysql_query($consulta,$cone);
			if(!$resultado)
			{die ("consulta invalida ".mysql_error());}
			else
			{echo "<p>Asignatura eliminada exitosamente.</p>";}
			mysql_close($cone);
		?>
		<br /><a href="manejoasig.php" class="button back glass" title="Atras">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
