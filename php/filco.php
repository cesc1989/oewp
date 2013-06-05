<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Creador de filas y columnas</title>
<link rel="shortcut icon" href="../imagenes/favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/estilo.css" />
</head>
<body>
<!--[if IE]>
<div id="usuarios-ie"><p>Debido a que estas usando Internet Explorer no puedes disfrutar de una navegacion de calidad.Te recomiendo pruebes un <b>BUEN</b> navegador como <a href="http://www.mozilla.com" title="Firefox web browser">Firefox</a>, o <a href="http://www.google.com/chrome" title="Google Chrome">Chrome</a></p></div>
<![endif]-->
	<div id="contenedor-cabeza">
		<div class="envoltura">
			<a class="logo" href="../index.html" title="Inicio">Otro Espacio Web Practicas</a>
			<nav>
				<ul class="menu">
					<li><a href="../index.html" title="Inicio">Inicio</a></li>
					<li><a class="actual" href="index.html" title="PHP/MySQL">PHP/MySQL</a></li>
					<li><a href="../html5/index.html" title="HTML5">HTML5</a></li>
					<li><a href="../jquery/index.html" title="jQuery">jQuery</a></li>
					<li><a href="../prezi/" title="Prezi">Prezi</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="contenedor-cuerpo">
		<div class="envoltura" style="overflow:scroll;">
			<?php 
				$f=$_GET["filas"];
				$c=$_GET["cols"];
				echo "<table>";
				$cf=1;
				while($cf<=$f)
				{
					echo"<tr>";
					$cc=1;
					while($cc<=$c)
					{
						echo"<td><img src=../imagenes/lizeth.png></td>";
						echo"<td>Tabla creada. :D</td>";
						$cc=$cc+1;
					}
					echo "</tr>";
					$cf=$cf+1;
				}
				echo"</table>";
			?>
			<br />
			<a href="taller.html">Volver</a>
		</div>
	</div>
	<div id="contenedor-pie">
		<div class="envoltura">
			<span>&copy;Otro Espacio Web Practicas.</span>
			<ul class="menu">
				<li><a href="../contacto.html" title="Contacto">Contacto</a></li>
				<li><a href="../desarrolladores.html" title="Creador">Creador</a></li>
				<li><a href="../mapa-sitio.html" title="Mapa del sitio">Mapa del sitio</a></li>
			</ul>
		</div>
	</div>
</body>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script>
<script type="text/javascript" src="../js/Bascula_400.font.js"></script>
</html>