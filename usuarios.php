<?php 

session_start();

require_once 'controlador/controlador.a.usuarios.php';

if (isset($_GET['crear-usuarios'])) {
	if (method_exists("modeloControlador", $_GET['crear-usuarios'])) {
		modeloControlador::{$_GET['crear-usuarios']}();
	}
} else {
	modeloControlador::usuarios();
}

 ?>