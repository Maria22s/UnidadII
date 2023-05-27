<?php 

class Modelo {
	private $Modelo;
	private $db;
	private $info;

	public function __construct(){
		$this->Modelo = array();
		$this->db = new PDO('mysql:host=localhost;dbname=id19866853_registro', "id19866853_root", "1jMxp!z*}e)1s?bn");
	}

	public function registrarDatos($tabla, $datos){
		$consult = "INSERT INTO ".$tabla." VALUES(null, ".$datos.")";
		$result = $this->db->query($consult);

		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function mostrarDatos($tabla, $condicion) {
		$consult = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";
		$result = $this->db->query($consult);

		while($filas = $result->FETCHALL(PDO::FETCH_ASSOC)) {
			$this->info[] = $filas;
		}
		return $this->info;
	}

	public function actualizarDatos($tabla, $data, $condicion) {
		$consult = "UPDATE ".$tabla." SET ".$data." WHERE ".$condicion.";";
		$result = $this->db->query($consult);

		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function eliminarDatos($tabla, $condicion) {
		$remove = "DELETE FROM " .$tabla. " WHERE " .$condicion.";";
		$result = $this->db->query($remove);

		if ($result) {
			return true;
		} else {
			return false;
		}
	}
}


