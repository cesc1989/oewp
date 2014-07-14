<!DOCTYPE html>
<head>
	<?php include_once("conexion_principal.php"); ?>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Creación de Datos Nuevos | Otro Espacio Web Prácticas</title>
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
<body>
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
				<h2>Registre su información</h2>
				<form name="nuevo" action="crear-registros.php" method="post">
					<div class="form-group">
						<label for="codigo" class="orden">Código</label>
						<input class="form-control" type="text" id="codigo" name="codigo" size="3" maxlength="2" />
					</div>
					<div class="form-group">
						<label for="nombre" class="orden">Nombre</label>
						<input class="form-control" type="text" id="nombre" name="nombre" maxlength="40" size="40" />
					</div>
					<div class="form-group">
						<label for="apellido" class="orden">Apellido</label>
						<input class="form-control" type="text" id="apellido" name="apellido" maxlength="40" size="40" />
					</div>
					<div class="form-group">
						<label for="direccion" class="orden">Dirección</label>
						<input class="form-control" type="text" id="direccion" name="direccion" maxlength="40" size="40" />
					</div>
					<div class="form-group">
						<label for="telefono" class="orden">Teléfono</label>
						<input class="form-control" type="text" id="telefono" name="telefono" maxlength="15" size="15" />
					</div>
					<div class="form-group">
						<label for="curso" class="orden">Curso</label>
						<select name="curso" id="curso" class="form-control">
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
					</div>
					<input type="submit" value="Guardar" class="btn btn-success" />
				</form>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<a href="tabla-registros.php" class="btn btn-warning btn-lg">Volver</a>
			</div>
		</div>
	</div>

	<div class="container footer">
		<div class="row">
			<div class="col-md-4">
				<span>&copy;Otro Espacio Web Practicas.</span>
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
				
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>