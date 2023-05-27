<?php 

require_once 'controlador/controlador.clientes.php';

if (isset($_GET['crear'])) {
	if (method_exists("modeloControlador", $_GET['crear'])) {
		modeloControlador::{$_GET['crear']}();
	}
} else {
	modeloControlador::clientes();
}

 ?>