<!DOCTYPE html>
<head>
	<?php include_once("conexion_principal.php");?>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Consulta de Datos | Otro Espacio Web Practicas</title>
	<meta content="Otro Espacio Web Practicas" name="title" />
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
				<h2>Consulta</h2>
				<p>Estos son los datos que arrojo la consulta a la base de datos:</p>
				<?php
					mysql_select_db($bd,$cone);
					$consul=$_REQUEST['ide'];
					$query="select Codigo,Nombres,Apellidos from Alumnos where Codigo=".$consul;
					$Recordset=mysql_query($query,$cone);
					if(!$Recordset){
						die("Consulta invalida: ".mysql_error());
					}else{
						$registro=mysql_fetch_assoc($Recordset);
						echo "C&oacute;digo: ".$registro['Codigo']."<br />";
						echo "Nombres: ".$registro['Nombres']."<br />";
						echo "Apellidos: ".$registro['Apellidos']."<br />";
					}
					mysql_close($cone);
				?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<a href="consultas-crea.php" title="volver" class="btn btn-warning btn-lg">Volver</a>
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