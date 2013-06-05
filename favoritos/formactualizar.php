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

<form action="actualizarfavorito.php" method="post">
	Titulo<input type="text" name="titulo" value="<?php echo $titulo; ?>" /><br />
	Direccion<input type="text" name="direccion" value="<?php echo $direccion; ?>" /><br />
	Categoria<select name="categoria">
		<option selected value="<?php echo $categoria; ?>"><?php echo $categoria; ?></option>
		<option value="<?php if($categoria=="salud" || $categoria=="comida"){echo "internet";} ?>"><?php if($categoria=="salud" || $categoria=="comida"){echo "internet";} ?></option>
		<option value="<?php if($categoria=="internet" || $categoria=="comida"){echo "salud";} ?>"><?php if($categoria=="internet" || $categoria=="comida"){echo "salud";} ?></option>
		<option value="<?php if($categoria=="internet" || $categoria=="salud"){echo "comida";} ?>"><?php if($categoria=="internet" || $categoria=="salud"){echo "comida";} ?></option>
	</select><br />
	Comentario<input type="text" name="comentario" value="<?php echo $comentario; ?>" /><br />
	Valoracion<input type="text" name="valoracion" value="<?php echo $valoracion; ?>" /><br />
	<input type="submit" value="Actualizar" />
</form>