<?php 

require_once 'controlador/controlador.usuarios.php';

if (isset($_GET['registro'])) {
	if (method_exists("modeloControlador", $_GET['registro'])) {
		modeloControlador::{$_GET['registro']}();
	}
} else {
	modeloControlador::vistaUsuarios();
}

 ?>