<?php
require_once 'ModeloBase.php';


require_once './libs/DB.php';


class ClienteModel extends DB
{

	public function __construct()
	{
		parent::__construct();

	}
	public function listarClientes()
	{
		$db = new ModeloBase();
		$query = "SELECT * FROM cliente WHERE active= 1 order by nombre_comercial";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerClientes()
	{
		$db = new ModeloBase();
		$query = "SELECT * FROM form_clientes ORDER BY fechaSolicitud desc";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerDatosCliente($id)
	{

		$db = new ModeloBase();
		$query = "SELECT * FROM cliente a 
		inner join departamento b on a.departamento_id = b.id 
		inner join municipio c on c.id = a.municipio_id and c.departamento_id = b.id 
		WHERE a.id = " . $id;
		//var_dump($query);
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerListaPedidos($idCliente)
	{
		$db = new ModeloBase();
		$query = "SELECT a.id, fecha_pedido, 
			CASE 
			WHEN status = 0 THEN 'ANULADO' 
			WHEN status = 1 THEN 'CREADO' 
			WHEN status = 2 THEN 'PENDIENTE DE AUTORIZACION' 
			WHEN status = 3 THEN 'PEDIDO SALIENDO' 
			WHEN status = 4 THEN 'PEDIDO EN REVISIÓN' 
			WHEN status = 7 THEN 'FACTURADO' 
			else 'OTRO' end ESTADO,b.nombre FORMA_PAGO, d.razon_social,sum(c.total) TOTAL
			FROM `pedido` a 
			LEFT join forma_de_pago b 	ON a.forma_de_pago = b.id 
			INNER JOIN PEDIDO_D c on a.id = c.pedido_id
			INNER JOIN CLIENTE d ON a.cliente_id = d.id
			WHERE a.cliente_id = " .$idCliente 	." GROUP BY 1,2,3,4,5;";
			
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerDatosClientebyDesc($search)
	{
		$db = new ModeloBase();
		$query = "SELECT * FROM (
			SELECT id,nombre_comercial, razon_social, nit,  CONCAT(UPPER(nombre_comercial),'-',UPPER(razon_social),'-',UPPER(NIT)) 
			CLIENTE_BUSQUEDA FROM `cliente` ) A
			WHERE CLIENTE_BUSQUEDA like '%" .strtoupper($search) . "%' 
			AND EXISTS (SELECT 1 FROM PEDIDO B 
                WHERE A.ID = B.cliente_id)";

		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerDatosClientes()
	{
		$db = new ModeloBase();
		$query = "SELECT * FROM cliente a 
		inner join departamento b on a.departamento_id = b.id 
		inner join municipio c on c.id = a.municipio_id and c.departamento_id = b.id "
		;

		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerCliente($id)
	{
		$db = new ModeloBase();
		$query = "SELECT * FROM form_clientes WHERE idCliente = '" . $id . "'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerFormulario($id)
	{
		$conn = new DB();
		$query = "SELECT  * FROM form_clientes where idform =" . $id;
		$resultado = $conn->query($query);
		// while ($row = $resultado->fetch()) {
		// 	$result = $row[0];
		//   }
		return $resultado;

	}


	public function obtenerClienteSig()
	{
		$conn = new DB();
		$query = "SELECT max(id)+1 as siguiente FROM cliente";
		$resultado = $conn->query($query);
		while ($row = $resultado->fetch()) {
			$result = $row[0];
		}
		return $result;


	}

	public function autorizaForm($id, $datos)
	{

		$conn = new DB();
		try {
			//$insertar = $db->insertar('form_clientes', $datos);
			$query = "UPDATE form_clientes 
			SET firma='" . $datos['firma']
				. "', fechaAutorizacion='" . $datos['fechaAutorizacion']
				. "', lugarAutorizacion='" . $datos['lugarAutorizacion']
				. "', Autorizado='" . $datos['Autorizado']
				. "' WHERE idform =" . $id;
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function editarFormulario($id, $datos)
	{
		$conn = new DB();
		try {
			//$insertar = $db->insertar('form_clientes', $datos);
			$query = "UPDATE form_clientes SET montoSolicitado=" . $datos['montoSolicitado']
				. ", fechaSolicitud ='" . $datos['fechaSolicitud']
				. "', tipoFact='" . $datos['tipoFact']
				. "', nitCliente='" . $datos['nitCliente']
				. "', dpiRepresentanteLegal='" . $datos['dpiRepresentanteLegal']
				. "', razonSocialCliente ='" . $datos['razonSocialCliente']
				. "', nombreComercial='" . $datos['nombreComercial']
				. "', direccionCliente='" . $datos['direccionCliente']
				. "', telefonoCliente='" . $datos['telefonoCliente']
				//2.datos del representante legal
				. "', nombreRepre='" . $datos['nombreRepre']
				. "', direccionRepre='" . $datos['direccionRepre']
				. "', ciudadRepre='" . $datos['ciudadRepre']
				. "', telefonoRepre='" . $datos['telefonoRepre']
				. "', celularRepre='" . $datos['celularRepre']
				. "', emailRepre='" . $datos['emailRepre']
				//3. información de pagos
				. "', nombrePagos='" . $datos['nombrePagos']
				. "', telOficinaPagos='" . $datos['telOficinaPagos']
				. "', telParticularPagos='" . $datos['telParticularPagos']
				. "', telCelularPagos='" . $datos['telCelularPagos']
				. "', emailPagos='" . $datos['emailPagos']
				. "', horarios='" . $datos['horarios']
				. "', localExterior='" . $datos['localExterior']
				. "', noEmpleados='" . $datos['noEmpleados']
				. "', localSucursales='" . $datos['localSucursales']
				. "', localCuantos='" . $datos['localCuantos']
				. "', ubicacionSucursales='" . $datos['ubicacionSucursales']
				. "', referencias='" . $datos['referencias']
				. "' WHERE idform =" . $id;
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function insertarCliente($datos)
	{
		$conn = new DB();
		try {
			//$insertar = $db->insertar('form_clientes', $datos);
			$query = "INSERT INTO form_clientes  (idCliente,montoSolicitado, fechaSolicitud,tipoFact,nitCliente,dpiRepresentanteLegal,razonSocialCliente,nombreComercial,
			direccionCliente, telefonoCliente, usuario_created,horarios, referencias)
			VALUES (" . $datos['idCliente']
				. ", " . $datos['montoSolicitado']
				. ", '" . $datos['fechaSolicitud']
				. "', '" . $datos['tipoFact']
				. "', '" . $datos['nitCliente']
				. "', '" . $datos['dpiRepresentanteLegal']
				. "', '" . $datos['razonSocialCliente']
				. "', '" . $datos['nombreComercial']
				. "', '" . $datos['direccionCliente']
				. "', '" . $datos['telefonoCliente']
				. "', '" . $datos['usuario']
				. "', '" . $datos['horarios']
				. "', '" . $datos['referencias']
				. "')";
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function editarCliente($id, $datos)
	{
		$db = new ModeloBase();
		try {
			$editar = $db->editar('form_clientes', $id, $datos);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function eliminarCliente($id)
	{
		$db = new ModeloBase();
		try {
			$eliminar = $db->eliminar('form_clientes', $id);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function subirArchivo($id, $orden, $datos)
	{
		$conn = new DB();
		$campo = "";
		switch ($orden) {
			case 1:
				$campo = 'fileRTU';
				break;
			case 2:
				$campo = 'filePatente';
				break;
			case 3:
				$campo = 'fileReferencia1';
				break;
			case 4:
				$campo = 'fileReferencia2';
				break;
			case 5:
				$campo = 'fileReferencia3';
				break;
		}

		try {
			//$insertar = $db->insertar('form_clientes', $datos);
			$query = "UPDATE form_clientes SET " . $campo . " = '" . $datos['file'] . "' WHERE idform =" . $id;
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

}
