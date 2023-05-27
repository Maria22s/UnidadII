<?php 

session_start();

require_once 'controlador/controlador.usuarios.php';

$datos = modeloControlador::searchDates();

if (empty($_SESSION['usuario'])) {
	header("Location: index.php");
}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cuenta</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="content">
		<div class="contenido-menu">
			<ul>
				<?php if ($datos['rol'] == 2): ?>
					<li><a href="cuenta.php">Inicio</a></li>
					<li><a href="usuarios.php">Usuarios</a></li>
					<li><a href="#">Clientes</a></li>
					<li><a href="#">Empleados</a></li>
					<li><a href="#">Paises</a></li>
					<li><a href="#">Modificar perfil</a></li>
					<li><a href="logout.php">Cerrar Sesión</a></li>
				<?php elseif ($datos['rol'] == 1): ?>
					<li><a href="cuenta.php">Inicio</a></li>
					<li><a href="#">Clientes</a></li>
					<li><a href="#">Empleados</a></li>
					<li><a href="#">Paises</a></li>
					<li><a href="#">Modificar perfil</a></li>
					<li><a href="logout.php">Cerrar Sesión</a></li>
				<?php endif ?>
			</ul>
		</div>
		<div class="content-content">
			<h2>Bienvenido estimado usuario: <?php echo $datos['usuario']; ?></h2>
		</div>
	</div>
</body>
</html>