<?php 

require_once ('modelo/model.php');

class modeloControlador{
	private $model;

	public function __construct(){
		$this->model = new Modelo();
	}

	static function clientes(){
		$cliente = new Modelo();
		$datos = $cliente->mostrarDatos("clientes", "1");
		require_once ('vista/clientes.php');
	}

	static function vistaClientes(){
		require_once ('vista/crear.php');
	}

	static function saveClientes(){
		$fnombre = $_REQUEST['fname'];
		$lnombre = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$telefono = $_REQUEST['telefono'];
		$preferencia = $_REQUEST['preferencia'];

		$table = "'".$fnombre."','".$lnombre."','".$email."','".$telefono."','".$preferencia."'";
		$clientes = new Modelo();
		$datos = $clientes->registrarDatos("clientes", $table);
		header("Location: clientes.php");
	}

	static function viewEditar(){
		$id = $_REQUEST['id'];
		$clientes = new Modelo();
		$datos = $clientes->mostrarDatos("clientes", "id=" . $id);
		require_once ('vista/viewEditar.php');
	}

	static function actualizarClientes(){
		$id = $_REQUEST['id'];
		$fnombre = $_REQUEST['fname'];
		$lnombre = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$telefono = $_REQUEST['telefono'];
		$preferencia = $_REQUEST['preferencia'];

		$table = "fname='".$fnombre."',lname='".$lnombre."',email='".$email."',telefono='".$telefono."',preferencia='".$preferencia."'";
		$clientes = new Modelo();
		$datos = $clientes->actualizarDatos("clientes", $table,"id=".$id);
		header("Location: clientes.php");
	}

	static function eliminarDatos() {
		$id = $_REQUEST['id'];
		$clientes = new Modelo();
		$datos = $clientes->eliminarDatos("clientes", "id=".$id);
		header("Location: clientes.php");
	}
}
