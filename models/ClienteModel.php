<?php
require_once 'ModeloBase.php';

require_once './libs/DB.php';


class ClienteModel extends DB {

	public function __construct() {
		parent::__construct();
	
	}

	public function obtenerClientes() {
		$db = new ModeloBase();
		$query = "SELECT * FROM form_clientes ORDER BY idCliente";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerCliente($id) {
		$db = new ModeloBase();
		$query = "SELECT * FROM form_clientes WHERE idCliente = '".$id."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function insertarCliente($datos) {
		$conn = new DB();
		try {
			//$insertar = $db->insertar('form_clientes', $datos);
			$query= "INSERT INTO form_clientes  (idCliente,tipoFact,nitCliente,dpiRepresentanteLegal,razonSocialCliente,nombreComercial,
			direccionCliente, telefonoCliente, usuario_created)
			VALUES (" .$datos['idCliente']
			. ", '" .$datos['tipoFact'] 
			. "', '" .$datos['nitCliente']
			. "', '" .$datos['dpiRepresentanteLegal']
			. "', '" .$datos['razonSocialCliente']
			. "', '" .$datos['nombreComercial']
			. "', '" .$datos['direccionCliente']
			. "', '" .$datos['telefonoCliente']
			. "', 'nelson')";
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function editarCliente($id, $datos) {
		$db = new ModeloBase();
		try {
			$editar = $db->editar('form_clientes', $id, $datos);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function eliminarCliente($id) {
		$db = new ModeloBase();
		try {
			$eliminar = $db->eliminar('form_clientes', $id);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

}
