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

	public function obtenerFormulario($id) {
		$conn = new DB();
		$query = "SELECT  * FROM form_clientes where idform =" .$id;
		$resultado = $conn->query(	$query);
		// while ($row = $resultado->fetch()) {
		// 	$result = $row[0];
		//   }
		return $resultado;

	}

	
	public function obtenerClienteSig() {
		$conn = new DB();
		$query = "SELECT max(id)+1 as siguiente FROM cliente";
		$resultado = $conn->query($query);
		while ($row = $resultado->fetch()) {
			$result = $row[0];
		  }
		return $result;

		
	}
	public function editarFormulario($id,$datos) {
		$conn = new DB();
		try {
			//$insertar = $db->insertar('form_clientes', $datos);
			$query= "UPDATE form_clientes SET montoSolicitado=" .$datos['montoSolicitado'] 
			. ", fechaSolicitud ='"	 .$datos['fechaSolicitud'] 
			. "', tipoFact='" .$datos['tipoFact'] 
			. "', nitCliente='" .$datos['nitCliente']
			. "', dpiRepresentanteLegal='" .$datos['dpiRepresentanteLegal']
			. "', razonSocialCliente ='" .$datos['razonSocialCliente']
			. "', nombreComercial='" .$datos['nombreComercial']
			. "', direccionCliente='" .$datos['direccionCliente']
			. "', telefonoCliente='" .$datos['telefonoCliente']
			. "' WHERE idForm =" .$id;
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function insertarCliente($datos) {
		$conn = new DB();
		try {
			//$insertar = $db->insertar('form_clientes', $datos);
			$query= "INSERT INTO form_clientes  (idCliente,montoSolicitado, fechaSolicitud,tipoFact,nitCliente,dpiRepresentanteLegal,razonSocialCliente,nombreComercial,
			direccionCliente, telefonoCliente, usuario_created)
			VALUES (" .$datos['idCliente']
			. ", " .$datos['montoSolicitado'] 
			. ", '" .$datos['fechaSolicitud'] 
			. "', '" .$datos['tipoFact'] 
			. "', '" .$datos['nitCliente']
			. "', '" .$datos['dpiRepresentanteLegal']
			. "', '" .$datos['razonSocialCliente']
			. "', '" .$datos['nombreComercial']
			. "', '" .$datos['direccionCliente']
			. "', '" .$datos['telefonoCliente']
			. "', '" .$datos['usuario']
			. "')";
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