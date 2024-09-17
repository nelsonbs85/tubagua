<?php
require_once 'ModeloBase.php';
require_once './libs/DB.php';

class ProductoModel extends DB {

	public function __construct() {
		parent::__construct();
	
	}

	public function obtenerProductos() {
		$db = new ModeloBase();
		$query = "SELECT a.id, a.codigo, a.nombre_corto, b.nombre, c.nombre, d.nombre,
		stock, f.precio_local
		FROM articulo a 
		INNER JOIN unidad_medida b 
    	on a.uni_med_id = b.id
   			 INNER JOIN categoria c 
    	on a.categoria_id = c.id
		INNER JOIN marca d
		on a.marca_id = d.id
		INNER JOIN inventario e 
		on a.id = e.articulo_id
		INNER JOIN listado_precio_d f
		on a.id =f. articulo_id
		WHERE a.active = 1
		and stock >0
		";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerProductosbyDescripcion($descripcion) {
		$db = new ModeloBase();
		$query = "SELECT a.id, a.codigo, a.nombre_corto, b.nombre, c.nombre, d.nombre,
		stock, f.precio_local
		FROM articulo a 
		INNER JOIN unidad_medida b 
    	on a.uni_med_id = b.id
   			 INNER JOIN categoria c 
    	on a.categoria_id = c.id
		INNER JOIN marca d
		on a.marca_id = d.id
		INNER JOIN inventario e 
		on a.id = e.articulo_id
		INNER JOIN listado_precio_d f
		on a.id =f. articulo_id
		WHERE a.active = 1 and nombre_corto like '%" .$descripcion ."%'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerProducto($id) {
		$db = new ModeloBase();
		$query = "SELECT a.id, a.codigo, a.nombre_corto, b.nombre, c.nombre, d.nombre,
		stock, f.precio_local
		FROM articulo a 
		INNER JOIN unidad_medida b 
    	on a.uni_med_id = b.id
   			 INNER JOIN categoria c 
    	on a.categoria_id = c.id
		INNER JOIN marca d
		on a.marca_id = d.id
		INNER JOIN inventario e 
		on a.id = e.articulo_id
		INNER JOIN listado_precio_d f
		on a.id =f. articulo_id
		WHERE a.id = '".$id."' and stock >0";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerDatos($tabla,$campo) {
		$db = new ModeloBase();
		$query = "SELECT * from " .$tabla ." order by " .$campo;
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerFacturas() {
		$db = new ModeloBase();
		$query = "SELECT 
			a.id, a.serie, a.numero_factura, a.numero_fel, a.numero_de_resolucion,
			a.status, a.fecha_pedido,a.forma_de_pago, a.cliente_id, sum(b.total),
			c.nombre_comercial
			FROM factura a 
			inner join factura_d b on a.id = b.factura_id
			inner join cliente c on a.cliente_id = c.id
			group by a.id, a.serie, a.numero_factura, a.numero_fel, a.numero_de_resolucion,
			a.status, a.fecha_pedido,a.forma_de_pago, a.cliente_id, 
			c.nombre_comercial";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerDepositos() {
		$db = new ModeloBase();
		// $query = "SELECT b.recibo_id, b.fecha_recibo, b.monto, b.factura_id, b.forma_de_pago_id, 
		// b.documento, b.documento_cheque, c.serie, c.numero_factura,c.fecha_pedido, d.nombre_comercial
		//  FROM recibo a inner join recibo_d b on a.id = b.recibo_id 
		//  inner join factura c on c.id = b.factura_id inner join cliente d on d.id = c.cliente_id;";
		$query = "SELECT b.recibo_id, b.fecha_recibo, SUM(b.monto), b.documento,
		 d.nombre_comercial FROM recibo a inner join recibo_d b on a.id = b.recibo_id 
		 inner join factura c on c.id = b.factura_id inner join cliente d 
		 on d.id = c.cliente_id GROUP BY b.recibo_id, b.fecha_recibo, b.documento,
		  d.nombre_comercial";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerDatosbyId($tabla,$campo, $id) {
		$db = new ModeloBase();
		$query = "SELECT * from " .$tabla ." WHERE " .$campo ." = " .$id;
		$resultado = $db->consultarRegistro($query);
		return $resultado;
	}
	public function obtenerPedido( $id) {
		$conn = new DB();
		$query = "SELECT  * FROM pedido
		 where id =" .$id;
		// var_dump($query);
		$resultado = $conn->query($query);
		// while ($row = $resultado->fetch()) {
		// 	$result = $row[0];
		//   }
		return $resultado;

	}
	public function obtenerPedidos($usuario_id) {
		$db = new ModeloBase();
		$query = "SELECT a.id, a.fecha_pedido,a.cliente_id, b.nit,razon_social,a.status from pedido a 
			inner join cliente b on a.cliente_id = b.id 
		where usuario_pedido_creado_id= " .$usuario_id;
		$resultado = $db->obtenerTodos($query);
		//echo $query;
		return $resultado;
	}
	public function obtenerDetalle($pedido_id) {
		$db = new ModeloBase();
		$query = "SELECT a.*,nombre_corto FROM pedido_d a
			INNER JOIN articulo b 
			on a.articulo_id = b.id
		WHERE a.pedido_id = " .$pedido_id;
		$resultado = $db->obtenerTodos($query);
		//echo $query;
		return $resultado;
	}

	public function autorizaDetalle($id) {
		//var_dump($id);
		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query= "UPDATE pedido SET status= 7 WHERE id =" .$id;
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
                    usuario_pedido_creado_id) VALUES (1,1," .$datos['cliente_id']
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
	public function insertarDetalle($datos) {
		//var_dump($datos );
		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query= "INSERT  INTO pedido_d (active,pedido_id,tipo,articulo_id,
				cantidad, precio_local,precio_local_sin_iva,total,
				total_sin_iva,usuario_id
			) VALUES (1," .$datos['pedido_id']
			. ",1," .$datos['articulo_id'] 
			. ", " .$datos['cantidad'] 
			. ", " .$datos['precio_local'] 
			. ", " .$datos['precio_local_sin_iva'] 
			. ", " .$datos['total']
			. ", " .$datos['total_sin_iva']
			. ", " .$datos['usuario_id']
			. ")";
			$resultado = $conn->query($query);
			if (!$resultado){
				return false; 
			}else{
				//return $conn->lastInsertId();
				return $datos['pedido_id']; 
				
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
