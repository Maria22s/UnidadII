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
			<li><a href="clientes.php">Clientes</a></li>
			<li><a href="empleados.php">Empleados</a></li>
			<li><a href="paises.php">Países</a></li>
		</ul>
	</header>
	<div class="contenido" align="center">
		<div class="formulario">
			<form method="GET">
				<input type="hidden" name="crear" value="saveClientes">
				<h1>Crear Clientes</h1>
				<div class="input-input">
					<input name="fname" type="text" placeholder="Nombre">
					<input name="lname" type="text" placeholder="Apellido">
				</div>
				<div class="input-input">
					<input name="email" type="email" placeholder="Correo">
					<input name="telefono" type="text" placeholder="Teléfono">
				</div>
				<div class="input-input">
					<p class="preferencia">Preferencia</p>
					<div class="input-radio">
						<span><input type="radio" name="preferencia" value="Teléfono"> Teléfono</span>
						<span><input type="radio" name="preferencia" value="Correo"> Correo</span>
					</div>
				</div>
				<div class="boton center">
					<input type="submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>