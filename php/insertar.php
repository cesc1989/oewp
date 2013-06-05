<!DOCTYPE html>
<head>
<?php include_once("conexion_principal.php"); ?>
<link rel="shortcut icon" href="../imagenes/favicon.ico" />
<link rel="stylesheet" href="../css/estilo.css" media="screen" type="text/css" />
<title>Otro Espacio Web Practicas || PHP - Registre sus datos</title>
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
			<fieldset style="display:inline">
			<legend>Registre su informaci&oacute;n</legend>
				<form name="nuevo" action="crear-registros.php" method="post">
					<label for="codigo" class="orden">Codigo</label>
					<input type="text" name="codigo" size="3" maxlength="2" />
					<label for="nombre" class="orden">Nombre</label>
					<input type="text" name="nombre" maxlength="40" size="40" />
					<label for="apellido" class="orden">Apellido</label>
					<input type="text" name="apellido" maxlength="40" size="40" />
					<label for="direccion" class="orden">Direccion</label>
					<input type="text" name="direccion" maxlength="40" size="40" />
					<label for="telefono" class="orden">Telefono</label>
					<input type="text" name="telefono" maxlength="15" size="15" />
					<laber for="curso" class="orden">Curso</label>
				<select name="curso">
					<?php
						mysql_select_db($bd,$cone);
						$query="select Codigo,Nombre from Cursos";
						$Recordset=mysql_query($query,$cone);
						if(!$Recordset){die("Consulta invalida: ".mysql_error());}
						else
						{
							while($record=mysql_fetch_array($Recordset))
							{
								echo"<option value='$record[Codigo]'>$record[Nombre]</option>";
							}
						}
					mysql_close($cone);
					?>
				</select>
					<br />
					<input type="submit" value="Guardar" />
				</form>
			<input value="< Atras" type="button" onclick="javascript:window.history.back()" />
			</fieldset>
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