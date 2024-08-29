<?php
require_once 'ModeloBase.php';
require_once './libs/DB.php';


class ProductoModel extends DB {

	public function __construct() {
		parent::__construct();
	
	}

	public function obtenerProductos() {
		$db = new ModeloBase();
		$query = " SELECT a.id, a.codigo, a.nombre_corto, 
		b.nombre, c.nombre, d.nombre, e.stock
		FROM articulo as a 
		INNER JOIN unidad_medida  as b 
    	on a.uni_med_id = b.id
   			 INNER JOIN categoria as c 
    	on a.categoria_id = c.id
		INNER JOIN marca as d
		on a.marca_id = d.id
		INNER JOIN inventario e 
		on a.id = e.articulo_id
		WHERE a.active = 1
		";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerProducto($id) {
		$db = new ModeloBase();
		$query = "SELECT a.id, a.codigo, a.nombre_corto, b.nombre, c.nombre, d.nombre,
		stock
		FROM articulo a 
		INNER JOIN unidad_medida b 
    	on a.uni_med_id = b.id
   			 INNER JOIN categoria c 
    	on a.categoria_id = c.id
		INNER JOIN marca d
		on a.marca_id = d.id;
		INNER JOIN inventario e 
		on a.id = e.articulo_id
		WHERE a.id = '".$id."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerProductoSig() {
		$conn = new DB();
		$query = "SELECT max(id)+1 as siguiente FROM cliente";
		$resultado = $conn->query($query);
		while ($row = $resultado->fetch()) {
			$result = $row[0];
		  }
		return $result;

		
	}
	public function obtenerDatos($tabla,$campo) {
		$db = new ModeloBase();
		$query = "SELECT * from " .$tabla ." order by " .$campo;
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerDatosbyId($tabla,$campo, $id) {
		$db = new ModeloBase();
		$query = "SELECT * from " .$tabla ." WHERE " .$campo ." = " .$id;
		$resultado = $db->consultarRegistro($query);
		return $resultado;
	}
	public function obtenerPedidos($usuario_id) {
		$db = new ModeloBase();
		$query = "SELECT a.id, a.fecha_pedido,a.cliente_id, b.nit,razon_social from pedido a 
			inner join cliente b on a.cliente_id = b.id 
		where usuario_pedido_creado_id= " .$usuario_id;
		$resultado = $db->obtenerTodos($query);
		//echo $query;
		return $resultado;
	}
	public function editarFormulario($id,$datos) {
		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query= "UPDATE articulo SET montoSolicitado=" .$datos['montoSolicitado'] 
			. ", fechaSolicitud ='"	 .$datos['fechaSolicitud'] 
			. "', tipoFact='" .$datos['tipoFact'] 
			. "', nitProducto='" .$datos['nitProducto']
			. "', dpiRepresentanteLegal='" .$datos['dpiRepresentanteLegal']
			. "', razonSocialProducto ='" .$datos['razonSocialProducto']
			. "', nombreComercial='" .$datos['nombreComercial']
			. "', direccionProducto='" .$datos['direccionProducto']
			. "', telefonoProducto='" .$datos['telefonoProducto']
			//2.datos del representante legal
			. "', nombreRepre='" .$datos['nombreRepre']
			. "', direccionRepre='" .$datos['direccionRepre']
			. "', ciudadRepre='" .$datos['ciudadRepre']
			. "', telefonoRepre='" .$datos['telefonoRepre']
			. "', celularRepre='" .$datos['celularRepre']
			. "', emailRepre='" .$datos['emailRepre']
			//3. información de pagos
			. "', nombrePagos='" .$datos['nombrePagos']
			. "', telOficinaPagos='" .$datos['telOficinaPagos']
			. "', telParticularPagos='" .$datos['telParticularPagos']
			. "', telCelularPagos='" .$datos['telCelularPagos']
			. "', emailPagos='" .$datos['emailPagos']
			. "', horarios='" .$datos['horarios']
            . "', localExterior='" .$datos['localExterior']
            . "', noEmpleados='" .$datos['noEmpleados']
            . "', localSucursales='" .$datos['localSucursales']
            . "', localCuantos='" .$datos['localCuantos']
            . "', ubicacionSucursales='" .$datos['ubicacionSucursales']
            . "', referencias='" .$datos['referencias']				
			. "' WHERE idform =" .$id;
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function insertarProducto($datos) {
		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query= "INSERT INTO articulo  (id,montoSolicitado, fechaSolicitud,tipoFact,nitProducto,dpiRepresentanteLegal,razonSocialProducto,nombreComercial,
			direccionProducto, telefonoProducto, usuario_created,horarios, referencias)
			VALUES (" .$datos['id']
			. ", " .$datos['montoSolicitado'] 
			. ", '" .$datos['fechaSolicitud'] 
			. "', '" .$datos['tipoFact'] 
			. "', '" .$datos['nitProducto']
			. "', '" .$datos['dpiRepresentanteLegal']
			. "', '" .$datos['razonSocialProducto']
			. "', '" .$datos['nombreComercial']
			. "', '" .$datos['direccionProducto']
			. "', '" .$datos['telefonoProducto']
			. "', '" .$datos['usuario']
			. "', '" .$datos['horarios']
			. "', '" .$datos['referencias']
			. "')";
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function insertarPedido($datos) {
		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query= "INSERT  INTO pedido (active,status,cliente_id,fecha_pedido,forma_de_pago,
                    transporte_id,observaciones, direccion_entrega,
                    usuario_pedido_creado_id) VALUES (1,7," .$datos['cliente_id']
			. ", '" .$datos['fecha_pedido'] 
			. "', " .$datos['forma_de_pago'] 
			. ", " .$datos['transporte_id'] 
			. ", '" .$datos['observaciones']
			. "', '" .$datos['direccion_entrega']
			. "', '" .$datos['usuario_pedido_creado_id']
			. "')";
			$resultado = $conn->query($query);
			if (!$resultado){
				return false; 
			}else{
				return $conn->lastInsertId();
				
			}
			///return $conn->mysql_insert_id();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function editarProducto($id, $datos) {
		$db = new ModeloBase();
		try {
			$editar = $db->editar('articulo', $id, $datos);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function eliminarProducto($id) {
		$db = new ModeloBase();
		try {
			$eliminar = $db->eliminar('articulo', $id);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}
