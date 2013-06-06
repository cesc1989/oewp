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
		<h1>Administraci&oacute;n de asignaturas</h1>
		<h2>Agregar</h2>
		<form name="insertar" action="agregarasig.php" method="get">
			<label for="nombre">Nombre</label>
			<input name="nombre" type="text" required maxlength="15" autocomplete="off" />
			<br />
			<label for="semestre">Semestre</label>
			<select name="semestre">
				<option value="uno">1</option>
				<option value="dos">2</option>
				<option value="tres">3</option>
				<option value="cuatro">4</option>
				<option value="cinco">5</option>
				<option value="seis">6</option>
				<option value="siete">7</option>
				<option value="ocho">8</option>
				<option value="noveno">9</option>
				<option value="cuatro">10</option>
			</select>
			<label for="codigo">Seleccione docente</label>
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
			</select>
			<label for="programa">Seleccione programa</label>
			<select name="programa">
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
			</select>
			<br />
			<input type="submit" value="Registrar" />
		</form>
		<h2>Modificar</h2>
		<form action="modificaasig.php" name="modificar" method="get">
			<label for="codigo">Seleccione asignatura</label>
			<select name="codigo">
			<?php
				mysql_select_db($bd,$cone)
				 or die('No se ha podido elejir ningun metodo de almacenamiento');
				$consulta="select * from asignaturas";
				$resultado=mysql_query($consulta,$cone);		
				while($resul=mysql_fetch_assoc($resultado))
				{	
					echo "<option value=$resul[codasig]>$resul[descripcion]</option>";
				}
			?>
			</select><br />
			<label for="nombre">Nuevo Nombre</label>
			<input type="text" name="nombre" maxlength="15" required /><br />
			<label for="semestre">Semestre</label>
			<select name="semestre">
				<option value="uno">1</option>
				<option value="dos">2</option>
				<option value="tres">3</option>
				<option value="cuatro">4</option>
				<option value="cinco">5</option>
				<option value="seis">6</option>
				<option value="siete">7</option>
				<option value="ocho">8</option>
				<option value="noveno">9</option>
				<option value="cuatro">10</option>
			</select>
			<label for="codo">Seleccione el docente</label>
			<select name="codo">
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
			</select>
			<label for="copo">Seleccione programa</label>
			<select name="copo">
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
			</select>
			<input type="submit" value="Modificar" />
		</form>
		<h2>Eliminar</h2>
		<form action="eliminaasig.php" name="eliminar" method="get">
			<label for="codigo">Seleccione asignatura</label>
			<select name="codigo">
			<?php
				mysql_select_db($bd,$cone)
				 or die('No se ha podido elejir ningun metodo de almacenamiento');
				$consulta="select * from asignaturas";
				$resultado=mysql_query($consulta,$cone);		
				while($resul=mysql_fetch_assoc($resultado))
				{	
					echo "<option value=$resul[codasig]>$resul[descripcion]</option>";
				}
			?>
			</select><br />
			<input type="submit" value="Eliminar" />
		</form>
		<br /><a href="listadoasig.php" class="button glass morph" title="Atras">Volver</a>
	</section>
	</div>
	<div id="contenedor-pie">
		<footer class="envoltura">
		</footer>
	</div>
</body>
</html>
