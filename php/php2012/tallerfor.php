<!DOCTYPE html>
<head>
	<title>PHP 2012 - Francisco Quintero || Tabla generada</title>
	<link rel="stylesheet" href="estilo-sitio.css" type="text/css" />
	<link rel="stylesheet" href="reset.css" type="text/css" />
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
		echo"<table border=1>";
		for($fila=0;$fila<=3;$fila++)
		{
			echo"<tr>";
			for($columna=0;$columna<=2;$columna++)
			{
				if($fila%2==0)
				{
					echo"<td>Constancia</td>";
					if ($columna<2)
					{
						echo"<td><img src=delicious.png></td></img>";
					}
				}
				else
				{
					echo"<td><img src=delicious.png /></td>";
					if($columna<2)
					{
						echo"<td>Constancia</td>";
					}
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
