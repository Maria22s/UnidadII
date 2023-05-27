<?php 

require_once ('modelo/model.php');

class modeloControlador{
	private $model;

	public function __construct(){
		$this->model = new Modelo();
	}

	static function usuarios(){
		$usuarios = new Modelo();
		$datos = $usuarios->mostrarDatos("usuarios", "1");
		require_once ('vista/usuarios.php');
	}

	static function vistaUsuarios(){
		require_once ('vista/crear-usuarios.php');
	}

	static function saveUsuarios(){
		$usuario = $_REQUEST['usuario'];
		$clave = $_REQUEST['clave'];
		$pregunta1 = $_REQUEST['pregunta1'];
		$pregunta2 = $_REQUEST['pregunta2'];
		$rol = $_REQUEST['rol'];

		$table = "'".$usuario."','".password_hash($clave, PASSWORD_DEFAULT)."','".$pregunta1."','".$pregunta2."','".$rol."'";
		$clientes = new Modelo();
		$datos = $clientes->registrarDatos("usuarios", $table);
		header("Location: usuarios.php");
	}

	static function viewEditarUsuarios(){
		$id = $_REQUEST['id'];
		$clientes = new Modelo();
		$datos = $clientes->mostrarDatos("usuarios", "id=" . $id);
		require_once ('vista/viewEditarUsuarios.php');
	}

	static function actualizarUsuarios(){
		$id = $_REQUEST['id'];
		$usuario = $_REQUEST['usuario'];
		$clave = $_REQUEST['clave'];
		$pregunta1 = $_REQUEST['pregunta1'];
		$pregunta2 = $_REQUEST['pregunta2'];
		$rol = $_REQUEST['rol'];

		$table = "usuario='".$usuario."',clave='".$clave."',pregunta1='".$pregunta1."',pregunta2='".$pregunta2."',rol='".$rol."'";
		$usuarios = new Modelo();
		$datos = $usuarios->actualizarDatos("usuarios", $table,"id=".$id);
		header("Location: usuarios.php");
	}

	static function eliminarDatos() {
		$id = $_REQUEST['id'];
		$usuarios = new Modelo();
		$datos = $usuarios->eliminarDatos("usuarios", "id=".$id);
		header("Location: usuarios.php");
	}

	static function searchDates() {
		$sesionId = $_SESSION['usuario'];
		require_once ('modelo/conexion.php');

		$consulta = $mysqli->prepare("SELECT * FROM usuarios WHERE usuario = ?");
		$consulta->bind_param("s", $sesionId);
		$consulta->execute();
		$resultado = $consulta->get_result();
		$cantidad = mysqli_num_rows($resultado);
		$datos = $resultado->fetch_assoc();
		$consulta->free_result();

		return $datos;

	}
}
