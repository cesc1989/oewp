<!DOCTYPE html>
<head>
<?php include_once("conexion_principal.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../imagenes/favicon.ico">
<link rel="stylesheet" href="../css/estilo.css" media="screen" type="text/css" />
<title>Otro Espacio Web Practicas || PHP - Registro y Consulta de datos</title>
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
			<h2>Consulta</h2>
			<p>Estos son los datos que arrojo la consulta a la base de datos:</p>
			<?php
				echo"<fieldset>";
				mysql_select_db($bd,$cone);
				$consul=$_REQUEST['ide'];
				$query="select Codigo,Nombres,Apellidos from Alumnos where Codigo=".$consul;
				$Recordset=mysql_query($query,$cone);
				if(!$Recordset)
				{
					die("Consulta invalida: ".mysql_error());
				}
				else
				{
					$registro=mysql_fetch_assoc($Recordset);
					echo "C&oacute;digo: ".$registro['Codigo']."<br />";
					echo "Nombres: ".$registro['Nombres']."<br />";
					echo "Apellidos: ".$registro['Apellidos']."<br />";
				}
				mysql_close($cone);
				echo "</fieldset>";
			?>
			<br />
			<a href="consultas-crea.php" title="volver"><- Atras</a>
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