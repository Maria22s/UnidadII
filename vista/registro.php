<?php 

session_start();

if (!empty($_SESSION['usuario'])) {
	header("Location: cuenta.php");
}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD Clientes</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<ul>
			<li><a href="index.php">Iniciar Sesión</a></li>
			<li><a href="registro.php">Registrarse</a></li>
		</ul>
	</header>
	<div class="contenido" align="center">
		<div class="formulario">
			<form method="GET">
				<input type="hidden" name="registro" value="saveUsuarios">
				<h1>Registro</h1>
				<div class="input-input">
					<input name="usuario" type="email" placeholder="Usuario">
					<input name="clave" type="password" placeholder="Clave">
				</div>
				<div class="input-input">
					<p class="preferencia">Seguridad</p>
					<input name="pregunta1" type="text" placeholder="Mascota">
					<input name="pregunta2" type="text" placeholder="Deporte">
				</div>
				<div class="input-input select">
					<select name="rol" id="">
						<option disabled selected>Tipo de usuario</option>
						<option value="1">Usuario</option>
						<option value="2">Admin</option>
					</select>
				</div>
				<div class="boton center">
					<input type="submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>