<!DOCTYPE html>
<head>
	<title>Otro Espacio Web Practicas || PHP, Favoritos App</title>
	<meta charset="utf-8" />
	<meta name="keywords" content="php,codigo php,tablas con php,mysql,consultas php,insercion con php,manejo de php,datos con php" />
	<link rel="shortcut icon" href="../../imagenes/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="screen" href="../../css/estilo.css" />
	<style type="text/css">
		label{
			display: block;
		}
		div#contenedor-cuerpo{
			padding-bottom: 15px;
		}
	</style>
</head>
<body>
<!--[if IE]>
<div id="usuarios-ie"><p>Debido a que estas usando Internet Explorer no puedes disfrutar de una navegacion de calidad.Te recomiendo pruebes un <b>BUEN</b> navegador como <a href="http://www.mozilla.com" title="Firefox web browser">Firefox</a>, o <a href="http://www.google.com/chrome" title="Google Chrome">Chrome</a></p></div>
<![endif]-->
	<div id="contenedor-cabeza">
		<div class="envoltura">
			<a class="logo" href="../../index.html" title="Inicio">Otro Espacio Web Practicas</a>
			<nav>
				<ul class="menu">
					<li><a href="../../index.html" title="Inicio">Inicio</a></li>
					<li><a class="actual" href="../" title="PHP/MySQL">PHP/MySQL</a></li>
					<li><a href="../../html5/" title="HTML5">HTML5</a></li>
					<li><a href="../../jquery/" title="jQuery">jQuery</a></li>
					<li><a href="../../prezi/" title="Prezi">Prezi</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="contenedor-cuerpo">
		<div class="envoltura">
			<h1>Inicia Sesion</h1>
			<form action="login.php" method="post">
				<div>
					<label for="usuario">Usuario</label>
					<input type="text" size="40" name="usuario" />
				</div>
				<div>
					<label for="contrasena">Contraseña</label>
					<input type="password" size="40" name="contrasena" />
				</div>
				<input type="submit" value="Ingresar" />
			</form>

			<h2>Si no estas registrado, hazlo aca abajo</h2>
			<form action="registrar.php" method="post">
				<div>
					<label for="usuario">Usuario</label>
					<input type="text" name="usuario" />
				</div>
				<div>
					<label for="contrasena">Contraseña</label>
					<input type="password" name="contrasena" />
				</div>
				<div>
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" />
				</div>
				<div>
					<label for="apellido">Apellido</label>
					<input type="text" name="apellido" />
				</div>
				<div>
					<label for="edad">Edad</label>
					<input type="text" name="edad" size="5" />
				</div>
				<input type="submit" value="Registrarse" />
			</form>
		</div>
	</div>
	<div id="contenedor-pie">
		<div class="envoltura">
			<span>&copy;Otro Espacio Web Practicas.</span>
			<ul class="menu">
				<li><a href="../../contacto.html" title="Contacto">Contacto</a></li>
				<li><a href="../../desarrolladores.html" title="Creador">Creador</a></li>
				<li><a href="../../mapa-sitio.html" title="Mapa del sitio">Mapa del sitio</a></li>
			</ul>
		</div>
	</div>
</body>
<script type="text/javascript" src="../../js/cufon-yui.js"></script>
<script type="text/javascript" src="../../js/cufon-replace.js"></script>
<script type="text/javascript" src="../../js/Bascula_400.font.js"></script>
</html>