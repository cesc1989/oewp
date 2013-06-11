<!DOCTYPE html>
<head>
<link rel="shortcut icon" href="../imagenes/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/estilo.css" />
<style type="text/css" media="screen">
	a.boton{
		text-decoration:none;
		background:#eee;
		color:#222;
		border:1px outset #ccc;
		padding:.5em .5em;
	}
	a.boton:hover{
		background:#ccb;
	}
	a.boton:active{
		border:1px solid #000;
	}
</style>
<title>Otro Espacio Web Practicas || PHP - Muestra imagenes</title>
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
		<div class="envoltura">
			<h1>Visor de imagenes.</h1>
			<p>A continuacion podras ver una serie de imagenes usando los botones de navegacion.</p>
			<div id="visor">
				<?php 
				if(!ISSET($_GET["numero"]))
					$x=2;
				else
					$x=$_GET["numero"];
				$x=$x-1;
				if($x!=-1)
					echo"<a class='boton' href='destino.php?numero=".$x."'>Anterior</a>";
				$x=$_GET["numero"];
				$x=$x+1;
				if($x!=14)
					echo "<a class='boton' href='destino.php?numero=".$x."'>Siguiente</a>";
				echo "<img src='../imagenes/antivirus".$x.".png' />";
				?>
				<a class="boton" href="index.html">regresar</a>
			</div>
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