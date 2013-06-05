<!DOCTYPE html>
<head>
<?php include_once("conexion_principal.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../imagenes/favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/estilo.css" />
<script type="text/javascript" src="../js/mostrar-ocultar.js"></script>
<title>Otro Espacio Web Practicas || PHP - Elecci&oacute;n de tarea</title>
</head>
<body onload="document.seleccion[0].focus();">
<!--[if lt IE 9]>
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
			<h2>Seleccion de tarea</h2>
			<p>Escoja una tarea a realizar presionando los botones "Mostrar/Ocultar"</p>
			<fieldset>
				<form name="seleccion">
					Consulta de registros <input type="button" value="Mostrar/Ocultar" onclick="muestraOculta('1');consultas[0].focus();" />
					Ingrese nuevos datos <input type="button" value="Mostrar/Ocultar" onclick="muestraOculta('2');registros[0].focus();" />
					<br /><br /><a href="index.html">Volver</a>
				</form>
			</fieldset>
			<form style="display:none;" id="formu_1" name="consultas" action="muestra-datos-2.php" method="get">
				<h3>Consultas</h3>
				Elija su nombre para ver mas:<select name="ide">
				<?php
					mysql_select_db($bd,$cone);
					$query="select Codigo,Nombres from Alumnos";
					$Recordset=mysql_query($query,$cone);
					if(!$Recordset)
					{
						die("Consulta invalida: ".mysql_error());
					}
					else
					{
						while($record=mysql_fetch_array($Recordset))
						{
							echo"<option value='$record[Codigo]'>$record[Nombres]</option>";
						}
					}
				?>
			</select>
			<input type="submit" value="Consultar" />
			</form>
			<form style="display:none;" id="formu_2" name="registros" action="crear-registros.php" method="get">
				<h3>Registre sus datos</h3>
				<label for="codigo" class="orden">Codigo</label>
				<input type="text" name="codigo" size="2" maxlength="2" />
				<label for="nombre" class="orden">Nombre</label>
				<input type="text" name="nombre" maxlength="18" size="20" />
				<label for="apellido" class="orden">Apellido</label>
				<input type="text" name="apellido" maxlength="18" size="20" />
				<label for="direccion" class="orden">Direccion</label>
				<input type="text" name="direccion" maxlength="20" size="20" />
				<label for="telefono" class="orden">Telefono</label>
				<input type="text" name="telefono" maxlength="15" size="15" />
				<laber for="curso" class="orden">Curso</label>
				<select name="curso">
					<?php
						mysql_select_db($bd,$cone);
						$query="select Codigo,Nombre from Cursos";
						$Recordset=mysql_query($query,$cone);
						if(!$Recordset)
						{
							die("Consulta invalida: ".mysql_error());
						}
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
				<br /><br />
				<input type="submit" value="Guardar" />
			</form>
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