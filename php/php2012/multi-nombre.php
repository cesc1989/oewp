<!DOCTYPE html>
<head>
	<title>PHP 2012 - Francisco Quintero || Taller 3</title>
	<link rel="stylesheet" href="reset.css" type="text/css" />
	<link rel="stylesheet" href="estilo-sitio.css" type="text/css" />
	<link rel="stylesheet" href="estilo-taller3.css" type="text/css" media="screen" />
</head>
<body>
	<div id="contenedor-cabeza">
		<header class="envoltura">
			<h1><a href="index.html" title="Inicio">PHP: clase 2012</a></h1>
		</header>
	</div>
	<div id="contenedor-cuerpo">
		<section class="envoltura">
			<h1>Taller 3 - solucionario</h1>
			<?php
				$nombre=$_GET["nombre"];
				$veces=$_GET["veces"];
				for($i=0;$i<=$veces;$i++)
				{
					echo "<p id=forma-".$i.">$nombre</p>";
				}
			?><br />
			<a href="javascript:history.back();">Volver</a>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
