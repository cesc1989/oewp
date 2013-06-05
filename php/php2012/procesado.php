<!DOCTYPE html>
<head>
	<title>PHP 2012 - Francisco Quintero || Taller IF - procesado</title>
	<link rel="stylesheet" href="estilo-sitio.css" type="text/css" />
	<link rel="stylesheet" href="reset.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>
<body>
	<div id="contenedor-cabeza">
	<header class="envoltura">
		<h1><a href="index.html" title="Inicio">PHP: clase 2012</a></h1>
	</header>
	</div>
	<div id="contenedor-cuerpo">
	<section class="envoltura">
		<h1>Resultado de datos</h1>
		<?php
			$nombre=$_GET["nombre"];
			$edad=$_GET["edad"];
			if($edad<20)
			{
			 echo "<p id=rojo>$nombre</p>";
			}
			if($edad==20)
			{
			 echo "<p id=azul>$nombre</p>";
			}
			if($edad>20)
			{
			 echo "<p id=verde>$nombre</p>";
			}
			?>
			<br /><a href="javascript:history.back();">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
