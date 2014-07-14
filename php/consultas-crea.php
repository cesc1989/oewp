<!DOCTYPE html>
<head>
	<?php include_once("conexion_principal.php"); ?>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Consultar y Crear | Otro Espacio Web Prácticas</title>
	<meta content="Otro Espacio Web Prácticas" name="title" />
	<meta name="author" content="Francisco Quintero" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../imagenes/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
</head>
<body onload="document.seleccion[0].focus();">

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="../index.html" title="Otro Espacio Web Prácticas">Otro Espacio Web Prácticas</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../index.html" class="active" title="Inicio">Inicio</a></li>
					<li><a href="../php/" title="PHP/MySQL">PHP/MySQL</a></li>
					<li><a href="../html5/" title="HTML5">HTML5</a></li>
					<li><a href="../jquery/" title="jQuery">jQuery</a></li>
					<li><a href="../prezi/" title="Prezi">Prezi</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Selección de tarea</h2>
				<p>Escoja una tarea a realizar presionando los botones "Mostrar/Ocultar"</p>
				
				<form name="seleccion">
					<div class="form-group">
						<label for="consultar">Consulta de registros</label>
						<input class="btn btn-info" type="button" id="consultar" value="Mostrar/Ocultar" onclick="muestraOculta('1');consultas[0].focus();" />
					</div>
					<div class="form-group">
						<label for="registrar">Ingrese nuevos datos</label>
						<input class="btn btn-info" type="button" id="registrar" value="Mostrar/Ocultar" onclick="muestraOculta('2');registros[0].focus();" />
					</div>
				</form>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="../php/index.html" class="btn btn-warning btn-lg">Volver</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<form style="display:none;" id="formu_1" name="consultas" action="muestra-datos-2.php" method="get">
					<h3>Consultas</h3>
					<label for="ver">Elija su nombre para ver más</label>
					<select name="ide" id="ver" class="form-control">
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
					<input type="submit" value="Consultar" class="btn btn-success" />
				</form>
			</div>

			<div class="col-md-6">
				<form style="display:none;" id="formu_2" name="registros" action="crear-registros.php" method="get">
					<h3>Registre sus datos</h3>
					<div class="form-group">
						<label for="codigo">Código</label>
						<input type="text" class="form-control" name="codigo" size="2" maxlength="2" />
					</div>
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" name="nombre" maxlength="18" size="20" />
					</div>
					<div class="form-group">
						<label for="apellido">Apellido</label>
						<input type="text" class="form-control" name="apellido" maxlength="18" size="20" />
					</div>
					<div class="form-group">
						<label for="direccion">Direccion</label>
						<input type="text" class="form-control" name="direccion" maxlength="20" size="20" />
					</div>
					<div class="form-group">
						<label for="telefono">Teléfono</label>
						<input type="text" class="form-control" name="telefono" maxlength="15" size="15" />
					</div>
					<div class="form-group">
						<laber for="curso">Curso</label>
						<select name="curso" class="form-control">
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
					</div>					
					<input class="btn btn-primary" type="submit" value="Guardar" />
				</form>
			</div>
		</div>
	</div>

	<div class="container footer">
		<div class="row">
			<div class="col-md-4">
				<span>&copy;Otro Espacio Web Prácticas.</span>
			</div>
			<div class="col-md-6">
				<ul>
					<li><a href="../contacto.html" title="Contacto">Contacto</a></li>
					<li><a href="../desarrolladores.html" title="Creador">Creador</a></li>
					<li><a href="../mapa-sitio.html" title="Mapa del sitio">Mapa del sitio</a></li>
				</ul>
			</div>
		</div>
	</div>
				
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/mostrar-ocultar.js"></script>
</body>
</html>