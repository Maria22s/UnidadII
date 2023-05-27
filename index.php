<?php 

require_once 'controlador/controlador.usuarios.php';

session_start();

if (!empty($_SESSION['usuario'])) {
	header('Location: index.php');
}

require_once 'vista/iniciarsesion.php';

 ?>