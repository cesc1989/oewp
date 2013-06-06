<!DOCTYPE html>
<?php include_once("conexion_principal.php"); ?>
<head>
	<title>PHP 2012 - Francisco Quintero || Administraci&oacute;n de programas</title>
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
		<h1>Administraci&oacute;n de programas</h1>
		<h2>Agregar un nuevo programa</h2>
		<form name="insertar" action="agregarpro.php" method="get">
			<label for="descripcion">Descripci&oacute;n</label>
			<input type="text" name="descripcion" required maxlength="20" autocomplete="off" />
			<br />
			<input type="submit" value="Registrar" />
		</form>
		<h2>Modificar</h2>
		<form action="modificapro.php" name="modificar" method="get">
			<label for="codigo">Seleccione el programa</label>
			<select name="codigo">
			<?php
				mysql_select_db($bd,$cone)
				 or die('No se ha podido elejir ningun metodo de almacenamiento');
				$consulta="select * from programa";
				$resultado=mysql_query($consulta,$cone);		
				while($resul=mysql_fetch_assoc($resultado))
				{	
					echo "<option value=$resul[codpro]>$resul[descripcion]</option>";
				}
			?>
			</select><br />
			<label for="descripcion">Nuevo nombre del programa</label>
			<input type="text" name="descripcion" maxlength="20" required /><br />
			<input type="submit" value="Modificar" />
		</form>
		<h2>Eliminar</h2>
		<form action="eliminarpro.php" name="eliminar" method="get">
			<label for="codigo">Seleccione el programa</label>
			<select name="codigo">
			<?php
				mysql_select_db($bd,$cone)
				 or die('No se ha podido elejir ningun metodo de almacenamiento');
				$consulta="select * from programa";
				$resultado=mysql_query($consulta,$cone);		
				while($resul=mysql_fetch_assoc($resultado))
				{	
					echo "<option value=$resul[codpro]>$resul[descripcion]</option>";
				}
				mysql_free_result($resultado);
				mysql_close($cone);
			?>
			</select><br />
			<input type="submit" value="Eliminar" />
		</form>
		<br /><a href="listadospro.php" class="button glass morph" title="Atras">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
