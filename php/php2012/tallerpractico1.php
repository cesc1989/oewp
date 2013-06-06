<!DOCTYPE html>
<head>
	<title>PHP 2012 - Francisco Quintero || Taller practico 1</title>
	<link rel="stylesheet" href="reset.css" type="text/css" />
	<link rel="stylesheet" href="estilo-sitio.css" type="text/css" />
</head>
<body>
	<div id="contenedor-cabeza">
	<header class="envoltura">
		<h1><a href="index.html" title="Inicio">PHP: clase 2012</a></h1>
	</header>
	</div>
	<div id="contenedor-cuerpo">
	<section class="envoltura">
		<h1>taller practico 1</h1>
		<p>A continuacion, mis datos personales:</p>
		<?php
			$nombres="Francisco Javier";
			$apellidos="Quintero Coronell";
			$edad=22;
			$celular="te lo debo";
			echo "Mi nombre: <b>$nombres</b><br />";
			echo "Mis apellidos: <b>$apellidos</b><br />";
			echo "Edad: <b>$edad</b><br />";
			echo "Mi numero de celular: <b>$celular</b><br />";
		?>
		<p>Te invito a pasar por mi blog :D <a href="http://otroespacioblog.wordpress.com" title="Otroespacioblog">Otroespacioblog</a>.</p>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
