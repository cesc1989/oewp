<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Administraci&oacute;n de docentes</title>
	<link rel="stylesheet" href="../reset.css" type="text/css" />
	<link rel="stylesheet" href="../estilo-sitio.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../buttons.css" media="screen" />
</head>
<body>
	<div id="contenedor-cabeza">
	<header class="envoltura">
		<h1><a href="../index.html" title="Inicio">PHP: clase 2012</a></h1>
	</header>
	</div>
	<div id="contenedor-cuerpo">
	<section class="envoltura">
		<h1>Administraci&oacute;n de docentes</h1>
		<h2>Agregar un nuevo profesor</h2>
		<form name="insertar" action="agregar.php" method="get">
			<label for="nombre">Nombre</label>
			<input name="nombre" type="text" required maxlength="15" autocomplete="off" />
			<br />
			<label for="apellido">Apellido</label>
			<input type="text" name="apellido" required maxlength="15" autocomplete="off" />
			<br />
			<input type="submit" value="Registrar" />
		</form>
		<h2>Modificar</h2>
		<form action="modifica.php" name="modificar" method="get">
			<label for="codigo">Seleccione el docente</label>
			<select name="codigo">
			<?php
				mysql_select_db($bd,$cone)
				 or die('No se ha podido elejir ningun metodo de almacenamiento');
				$consulta="select * from profesores";
				$resultado=mysql_query($consulta,$cone);		
				while($resul=mysql_fetch_assoc($resultado))
				{	
					echo "<option value=$resul[codprof]>$resul[nombres] $resul[apellidos]</option>";
				}
			?>
			</select><br />
			<label for="nombre">Nuevo Nombre</label>
			<input type="text" name="nombre" maxlength="15" required /><br />
			<label for="apellido">Nuevo Apellido</label>
			<input type="text" name="apellido" maxlength="15" required />
			<input type="submit" value="Modificar" />
		</form>
		<h2>Eliminar</h2>
		<form action="eliminar.php" name="eliminar" method="get">
			<label for="codigo">Seleccione el docente</label>
			<select name="codigo">
			<?php
				mysql_select_db($bd,$cone)
				 or die('No se ha podido elejir ningun metodo de almacenamiento');
				$consulta="select * from profesores";
				$resultado=mysql_query($consulta,$cone);		
				while($resul=mysql_fetch_assoc($resultado))
				{	
					echo "<option value=$resul[codprof]>$resul[nombres] $resul[apellidos]</option>";
				}
				mysql_free_result($resultado);
				mysql_close($cone);
			?>
			</select><br />
			<input type="submit" value="Eliminar" />
		</form>
		<br /><a href="listadoprof.php" class="button glass morph" title="Atras">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
