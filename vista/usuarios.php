<?php 

$dato = modeloControlador::searchDates();

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
					<li><a href="cuenta.php">Inicio</a></li>
					<li><a href="usuarios.php">Usuarios</a></li>
					<li><a href="clientes.php">Clientes</a></li>
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
				<h1>Clientes</h1>
				<div class="boton">
					<a href="usuarios.php?crear-usuarios=vistaUsuarios">Registrar clientes</a>
				</div>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Usuario</th>
							<th>Pregunta 1</th>
							<th>Pregunta 2</th>
							<th>Tipo rol</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if (!empty($datos)) {
							foreach ($datos as $dato => $value) {
								foreach ($value as $filas) { ?>
									<tr>
										<td><?php echo $filas['id']; ?></td>
										<td><?php echo $filas['usuario']; ?></td>
										<td><?php echo $filas['pregunta1']; ?></td>
										<td><?php echo $filas['pregunta2']; ?></td>
										<td><?php echo $filas['rol']; ?></td>
										<td><a href="usuarios.php?crear-usuarios=viewEditarUsuarios&id=<?php echo $filas['id']; ?>">Editar</a> / <a href="usuarios.php?crear-usuarios=eliminarDatos&id=<?php echo $filas['id']; ?>">Eliminar</a></td>
									</tr>
								<?php
								}
							} 
						} else {
							echo "<tr><td colspan='7'>No hay datos</td></tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>