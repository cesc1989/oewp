<!DOCTYPE html>
<head>
<?php include_once("conexion_principal.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../imagenes/favicon.ico" />
<link rel="stylesheet" href="../css/estilo.css" media="screen" type="text/css" />
<title>Otro Espacio Web Practicas || PHP - Registro de datos</title>
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
			<?php
				mysql_select_db($bd,$cone);
				$valor=$_GET["Codigo"];
				$query="select * from Alumnos where Codigo='$valor'";
				$Recordset=mysql_query($query,$cone);
				if(!$Recordset)
				{
					die("Consulta invalida: ".mysql_error());
				}
				$reg=mysql_fetch_assoc($Recordset);
				echo "<form>";
						echo "Codigo <input type='text' name='codigo' value='$reg[Codigo]' /><br>";
						echo "Nombres <input type='text' name='nombres' value='$reg[Nombres]' /><br>";
						echo "Apellidos <input type='text' name='apellidos' value='$reg[Apellidos]' /><br>";
						echo "Direccion <input type='text' name='direccion' value='$reg[Direccion]' /><br>";
						echo "Telefono <input type='text' name='telefono' value='$reg[Telefono]' /><br>";
						echo "<br>";
						echo "<a class='boton' href='tabla-registros.php'>Regresar</a>";
						echo "<a class='boton' href='index.html'>Volver al inicio</a>";
				echo "</form>";
			mysql_close($cone);
			?>
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