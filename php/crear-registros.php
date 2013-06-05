<!DOCTYPE html>
<head>
<?php include_once("conexion_principal.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../imagenes/favicon.ico" />
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
			<h2>Creacion de registros</h2>
			<?php
				mysql_select_db($bd,$cone);
				$codigo=$_REQUEST['codigo'];
				$nombre=$_REQUEST['nombre'];
				$apellido=$_REQUEST['apellido'];
				$direccion=$_REQUEST['direccion'];
				$telefono=$_REQUEST['telefono'];
				$curso=$_REQUEST['curso'];
				$query2="insert into Alumnos(Codigo,Nombres,Apellidos,Direccion,Telefono,Curso) values('".$codigo."','".$nombre."','".$apellido."','".$direccion."','".$telefono."','".$curso."')";
				$record=mysql_query($query2,$cone);
				if(!$record)
				{
					die("Consulta invalida: ".mysql_error());
				}
				else
				{
					echo "<p>Operaci&oacute;n completada satisfactoriamente.</p>";
				}
				mysql_close($cone);
			?>
			<br />
			<a href="consultas-crea.php">Volver</a>
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