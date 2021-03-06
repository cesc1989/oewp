<?php include_once("conexion_principal.php"); ?>
<!DOCTYPE html>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Administración de docentes | Otro Espacio Web Prácticas</title>
<meta content="Otro Espacio Web Prácticas" name="title" />
<meta name="author" content="Francisco Quintero" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../../imagenes/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../../../css/style.css">
<script type="text/javascript" src="../../../js/jquery-2.1.1.min.js"></script>

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
		      <a class="navbar-brand" href="../../../index.html" title="Otro Espacio Web Prácticas">Otro Espacio Web Prácticas</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../../../index.html" title="Inicio">Inicio</a></li>
					<li><a href="../../../php/" class="active" title="PHP/MySQL">PHP/MySQL</a></li>
					<li><a href="../../../html5/" title="HTML5">HTML5</a></li>
					<li><a href="../../../jquery/" title="jQuery">jQuery</a></li>
					<li><a href="../../../prezi/" title="Prezi">Prezi</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Administración de docentes</h1>
				<h2>Agregar un nuevo profesor</h2>
				<form name="insertar" action="agregar.php" method="get">
					<label for="nombre">Nombre</label>
					<input class="form-control" name="nombre" type="text" required maxlength="15" autocomplete="off" />
					<br />
					<label for="apellido">Apellido</label>
					<input class="form-control" type="text" name="apellido" required maxlength="15" autocomplete="off" />
					<br />
					<input class="btn btn-success" type="submit" value="Registrar" />
				</form>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<h2>Modificar</h2>
				<form action="modifica.php" name="modificar" method="get">
					<label for="codigo">Seleccione el docente</label>
					<select name="codigo" class="form-control">
					<?php
						mysql_select_db($bd,$cone)
						 or die('No se ha podido elejir ningun metodo de almacenamiento');
						$consulta="select * from profesores";
						$resultado=mysql_query($consulta,$cone);		
						while($resul=mysql_fetch_assoc($resultado)){	
							echo "<option value=$resul[codprof]>$resul[nombres] $resul[apellidos]</option>";
						}
					?>
					</select>
					<br />
					<label for="nombre">Nuevo Nombre</label>
					<input class="form-control" type="text" name="nombre" maxlength="15" required /><br />
					<label for="apellido">Nuevo Apellido</label>
					<input class="form-control" type="text" name="apellido" maxlength="15" required />
					<input class="btn btn-success" type="submit" value="Modificar" />
				</form>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<h2>Eliminar</h2>
				<form action="eliminar.php" name="eliminar" method="get">
					<label for="codigo">Seleccione el docente</label>
					<select class="form-control" name="codigo">
					<?php
						mysql_select_db($bd,$cone)
						 or die('No se ha podido elejir ningun metodo de almacenamiento');
						$consulta="select * from profesores";
						$resultado=mysql_query($consulta,$cone);		
						while($resul=mysql_fetch_assoc($resultado)){	
							echo "<option value=$resul[codprof]>$resul[nombres] $resul[apellidos]</option>";
						}
						mysql_free_result($resultado);
						mysql_close($cone);
					?>
					</select>
					<br />
					<input class="btn btn-success" type="submit" value="Eliminar" />
				</form>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<a href="listadoprof.php" class="btn btn-primary btn-lg" title="Atras">Volver</a>
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
					<li><a href="../../../contacto.html" title="Contacto">Contacto</a></li>
					<li><a href="../../../desarrolladores.html" title="Creador">Creador</a></li>
					<li><a href="../../../mapa-sitio.html" title="Mapa del sitio">Mapa del sitio</a></li>
				</ul>
			</div>
		</div>
	</div>
				
	<script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
</body>
</html>
