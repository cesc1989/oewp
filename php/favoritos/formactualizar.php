<?php
	session_start();

	$usuario = $_SESSION['usuario'];
	$contrasena = $_SESSION['contrasena'];
	$titulo = $_GET['titulo'];
	$direccion = $_GET['direccion'];
	$categoria = $_GET['categoria'];
	$comentario = $_GET['comentario'];
	$valoracion = $_GET['valoracion'];

	$_SESSION['titulo']=$titulo;
?>
<!DOCTYPE html>
<head>
	<title>Otro Espacio Web Practicas || PHP, Favoritos App</title>
	<meta charset="utf-8" />
	<meta name="keywords" content="php,codigo php,tablas con php,mysql,consultas php,insercion con php,manejo de php,datos con php" />
	<link rel="shortcut icon" href="../../imagenes/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="screen" href="../../css/estilo.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="../../css/buttons.css" />
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
			<form action="actualizarfavorito.php" method="post">
				<h1>Actualiza tu favorito</h1>
				<div>
					<label for="titulo">Titulo</label>
					<input type="text" name="titulo" value="<?php echo $titulo; ?>" />
				</div>
				<div>
					<label for="direccion">Direccion</label>
					<input type="text" name="direccion" value="<?php echo $direccion; ?>" />
				</div>
				<div>
					<label for="categoria">Categoria</label>
					<select name="categoria">
						<option selected value="<?php echo $categoria; ?>"><?php echo $categoria; ?></option>
						<option value="<?php if($categoria=="salud" || $categoria=="comida"){echo "internet";} ?>"><?php if($categoria=="salud" || $categoria=="comida"){echo "internet";} ?></option>
						<option value="<?php if($categoria=="internet" || $categoria=="comida"){echo "salud";} ?>"><?php if($categoria=="internet" || $categoria=="comida"){echo "salud";} ?></option>
						<option value="<?php if($categoria=="internet" || $categoria=="salud"){echo "comida";} ?>"><?php if($categoria=="internet" || $categoria=="salud"){echo "comida";} ?></option>
					</select>
				</div>
				<div>
					<label for="comentario">Comentario</label>
					<input type="text" name="comentario" value="<?php echo $comentario; ?>" />
				</div>
				<div>
					<label for="valoracion">Valoracion</label>
					<input type="text" name="valoracion" value="<?php echo $valoracion; ?>" />
				</div>
				<input type="submit" value="Actualizar" />
			</form>
			<a href="principal.php" class="button glossy green">No actualizar</a>
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