<!DOCTYPE html>
<head>
	<title>PHP 2012 - Francisco Quintero || Taller $_GET</title>
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
		<h1>Tabla generada</h1>
		<?php
			$fila=$_GET["filas"];
			$columna=$fila;
			$cont=0;
			echo"<table border=1>";
			for($j=1;$j<=$fila;$j++)
			{
				$cont++;
				for($i=1;$i<=$columna;$i++)
				{
					if($i==$cont)
					{
						echo"<td><img src=delicious.png></td>";
					}
					else
					{
						echo"<td>Constancia</td>";
					}
				}
				echo"</tr>";
			}
			echo"</table>";
		?>
		<br />
		<a href="javascript:history.back();">Atras</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
