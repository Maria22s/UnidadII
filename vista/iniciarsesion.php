<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	modeloControlador::iniciarsesion();
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
			<form method="POST">
				<input type="hidden" name="crear" value="saveClientes">
				<h1>Iniciar sesión</h1>
				<div class="input-input">
					<input name="usuario" type="email" placeholder="Usuario">
					<input name="clave" type="password" placeholder="Clave">
				</div>
				<div class="boton center">
					<input type="submit" value="Iniciar Sesión">
				</div>
			</form>
		</div>
	</div>
</body>
</html>