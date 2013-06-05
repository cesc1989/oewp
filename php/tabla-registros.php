<!DOCTYPE html>
<head>
<?php include_once("conexion_principal.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../imagenes/favicon.ico" />
<link rel="stylesheet" href="../css/estilo.css" media="screen" type="text/css" />
<title>Otro Espacio Web Practicas || PHP - Lista de registros</title>
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
		<?php
			mysql_select_db($bd,$cone);
			$query="select * from Alumnos order by Codigo";
			$Recordset=mysql_query($query,$cone);
			if(!$Recordset)
				die("Consulta invalida: ".mysql_error());
			if(mysql_num_rows($Recordset)==0)
			{
				echo"No se han encontrado filas dentro de la tabla.";
				exit;
			}?>
		<div class="envoltura">
				<table summary="Tabla de registros">
					<caption>Registros actuales</caption>
					<tr>
					<th>Codigo</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					</tr>
					<tr>
				<?php
					while($fila=mysql_fetch_assoc($Recordset))
					{
						echo"<td>";
						echo"<a href=muestra-datos.php?Codigo=".$fila['Codigo'].">".$fila['Codigo']."</a>";
						echo"</td>";
						echo"<td>";
						echo $fila['Nombres'];
						echo"</td>";
						echo"<td>";
						echo $fila['Apellidos'];
						echo"</td>";
						echo"</tr>";
					}
					mysql_free_result($Recordset);
					mysql_close($cone);
					?>
					<td colspan='3'>
					<a href='insertar.php' title='Crear nuevo'>Nuevo</a>
					</td>
					</table>
					<a href=index.html title=Atras>Volver</a>
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