<?php 

$dato = modeloControlador::searchDates();

if ($dato['rol'] == 1) {
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
				<?php if ($dato['rol'] == 2): ?>
					<li><a href="usuarios.php">Usuarios</a></li>
					<li><a href="#">Clientes</a></li>
					<li><a href="#">Empleados</a></li>
					<li><a href="#">Paises</a></li>
					<li><a href="#">Modificar perfil</a></li>
					<li><a href="logout.php">Cerrar Sesión</a></li>
				<?php elseif ($dato['rol'] == 1): ?>
					<li><a href="#">Clientes</a></li>
					<li><a href="#">Empleados</a></li>
					<li><a href="#">Paises</a></li>
					<li><a href="#">Modificar perfil</a></li>
					<li><a href="logout.php">Cerrar Sesión</a></li>
				<?php endif ?>
			</ul>
		</div>
		<div class="content-content">
			<div class="contenido" align="center">
				<div class="formulario">
					<form method="GET">
						<input type="hidden" name="crear-usuarios" value="saveUsuarios">
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
		</div>
	</div>
</body>
</html>