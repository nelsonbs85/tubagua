<?php
require_once 'ModeloBase.php';
require_once './libs/DB.php';

class ProductoModel extends DB
{

	public function __construct()
	{
		parent::__construct();

	}

	public function obtenerProductos()
	{
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
	public function obtenerProductosreal()
	{
		$db = new ModeloBase();
		$query = "SELECT a.id, a.codigo, a.nombre_corto, b.nombre, c.nombre, d.nombre,
		stock, f.precio_local, g.cantidad
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
        INNER JOIN (
            SELECT pedido_d.articulo_id articulo, sum(cantidad)  cantidad FROM pedido
            	inner join pedido_d on 
            	pedido.id = pedido_d.pedido_id
            WHERE pedido.status <7
            GROUP by pedido_d.articulo_id
        ) g  on a.id = g.articulo
		WHERE a.active = 1
		and stock >0 
		";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerProductosbyDescripcion($descripcion)
	{
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
		WHERE a.active = 1 and nombre_corto like '%" . $descripcion . "%'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerProducto($id)
	{
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
		WHERE a.id = '" . $id . "' and stock >0";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerDatos($tabla, $campo)
	{
		$db = new ModeloBase();
		$query = "SELECT * from " . $tabla . " order by " . $campo;
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerDatosMunicipio($depto)
	{
		$db = new ModeloBase();
		$query = "SELECT * from departamento WHERE departamento_id = " .$depto; 
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerDetalleRecibobyId($id)
	{
		$db = new ModeloBase();
		$query = "SELECT b.serie,b.numero_factura, b.fecha_pedido, a.recibo_id, a.monto,
		 a.documento, sum(c.total) from recibo_d a 
		 left join factura b on a.factura_id = b.id 
		 left join factura_d c on a.factura_id = c.factura_id 
		 WHERE recibo_id =" . $id
			. " group by b.serie,b.numero_factura, b.fecha_pedido, a.recibo_id, a.monto,
		 a.documento";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerFacturas()
	{
		$db = new ModeloBase();
		$query = "SELECT 
			a.id, a.serie, a.numero_factura, a.numero_fel, a.numero_de_resolucion,
			a.status, a.fecha_pedido,a.forma_de_pago, a.cliente_id, sum(b.total),
			c.nombre_comercial
			FROM factura a 
			inner join factura_d b on a.id = b.factura_id 
			inner join cliente c on a.cliente_id = c.id
			WHERE
			a.active = 1 and a.status in (2,3,4) and not exists (
				SELECT 1 FROM recibo_d x
				WHERE x.factura_id = a.id
				)
			AND numero_factura is not null
			group by a.id, a.serie, a.numero_factura, a.numero_fel, a.numero_de_resolucion,
			a.status, a.fecha_pedido,a.forma_de_pago, a.cliente_id, 
			c.nombre_comercial";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerFacturasbyCliente($id)
	{
		$db = new ModeloBase();
		$query = "SELECT  * FROM 
			(SELECT
			f.id,
			f.numero_factura,
			f.nit,
			SUM(fd.total) AS total_factura,
			COALESCE(nc.notas_de_credito, 0) AS notas_de_credito,
			COALESCE(rd.abonos, 0) AS abonos,
			SUM(fd.total) - 
			CAST(COALESCE(nc.notas_de_credito,0) AS DECIMAL(10,2)) - 
			CAST(COALESCE(rd.abonos,0) AS DECIMAL(10,2))
			AS saldo
		FROM
			factura f
			JOIN factura_d fd ON fd.factura_id = f.id
			LEFT JOIN (
				SELECT 
					nc.factura_id,
					SUM(ncd.total) AS notas_de_credito
				FROM 
					nota_credito nc
					JOIN nota_credito_d ncd ON ncd.nota_credito_id = nc.id
				WHERE 
					nc.status IN (2,3)
				GROUP BY 
					nc.factura_id
			) nc ON nc.factura_id = f.id
			LEFT JOIN (
				SELECT 
					factura_id,
					SUM(monto) AS abonos
				FROM 
					recibo_d
				GROUP BY
					factura_id
			) rd ON rd.factura_id = f.id
		WHERE 
			f.cliente_id =" . $id 
			. " GROUP BY
			f.id, f.numero_factura, f.nit, nc.notas_de_credito, rd.abonos ) A
			WHERE saldo >0";
		$resultado = $db->obtenerTodos($query);

		return $resultado;
	}
	public function ClienteTienePendiente($idCliente)
	{
		$conn = new DB();
		$query = "SELECT  count(*) FROM 
			(SELECT
			f.id,
			coalesce(f.numero_factura,0.00),
			f.nit,
			SUM(fd.total) AS total_factura,
			COALESCE(nc.notas_de_credito, 0) AS notas_de_credito,
			COALESCE(rd.abonos, 0) AS abonos,
			SUM(fd.total) - 
			CAST(COALESCE(nc.notas_de_credito,0) AS DECIMAL(10,2)) - 
			CAST(COALESCE(rd.abonos,0) AS DECIMAL(10,2))
			AS saldo
		FROM
			factura f
			JOIN factura_d fd ON fd.factura_id = f.id
			LEFT JOIN (
				SELECT 
					nc.factura_id,
					SUM(ncd.total) AS notas_de_credito
				FROM 
					nota_credito nc
					JOIN nota_credito_d ncd ON ncd.nota_credito_id = nc.id
				WHERE 
					nc.status IN (2,3)
				GROUP BY 
					nc.factura_id
			) nc ON nc.factura_id = f.id
			LEFT JOIN (
				SELECT 
					factura_id,
					SUM(monto) AS abonos
				FROM 
					recibo_d
				GROUP BY
					factura_id
			) rd ON rd.factura_id = f.id
		WHERE 
			f.cliente_id =" . $idCliente
			. " GROUP BY
			f.id, f.numero_factura, f.nit, nc.notas_de_credito, rd.abonos ) A
			WHERE saldo >0";
			$resultado = $conn->query($query);
			while ($row = $resultado->fetch()) {
				$result = $row[0];
			  }
			return $result;
	}
	public function obtenerFacturasbyRecibo($id)
	{
		$db = new ModeloBase();
		$query = "SELECT
    f.id,
    f.numero_factura,
    f.nit,
    SUM(fd.total) AS total_factura,
    COALESCE(nc.notas_de_credito, 0) AS notas_de_credito,
    COALESCE(rd.abonos, 0) AS abonos,
    SUM(fd.total) - COALESCE(nc.notas_de_credito, 0) - COALESCE(rd.abonos, 0) AS saldo,
	rec.recibo_id
FROM
    factura f
    JOIN factura_d fd ON fd.factura_id = f.id
    LEFT JOIN (
        SELECT 
            nc.factura_id,
            SUM(ncd.total) AS notas_de_credito
        FROM 
            nota_credito nc
            JOIN nota_credito_d ncd ON ncd.nota_credito_id = nc.id
        WHERE 
             nc.status IN (2,3)
        GROUP BY 
            nc.factura_id
    ) nc ON nc.factura_id = f.id
    LEFT JOIN (
        SELECT 
            factura_id,
            SUM(monto) AS abonos
        FROM 
            recibo_d
        GROUP BY
            factura_id
    ) rd ON rd.factura_id = f.id
	    JOIN recibo_d rec on rec.factura_id = f.id
WHERE
    f.cliente_id = " . $id . " GROUP BY
    f.id, f.numero_factura, f.nit, nc.notas_de_credito, rd.abonos;";

		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerDepositos($usuario_id)
	{
		$db = new ModeloBase();
		$query = "SELECT b.recibo_id, b.fecha_recibo, SUM(b.monto), b.documento,
		 d.nombre_comercial FROM recibo a left join recibo_d b on a.id = b.recibo_id 
		 left join factura c on c.id = b.factura_id left join cliente d 
		 on d.id = c.cliente_id 
		   WHERE a.usuario_id = " . $usuario_id
			. " GROUP BY b.recibo_id, b.fecha_recibo, b.documento,
		  d.nombre_comercial"
		;
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerRecibosbyId($id)
	{
		$db = new ModeloBase();
		// $query = "SELECT b.recibo_id, b.fecha_recibo, b.monto, b.factura_id, b.forma_de_pago_id, 
		// b.documento, b.documento_cheque, c.serie, c.numero_factura,c.fecha_pedido, d.nombre_comercial
		//  FROM recibo a inner join recibo_d b on a.id = b.recibo_id 
		//  inner join factura c on c.id = b.factura_id inner join cliente d on d.id = c.cliente_id;";
		$query = "SELECT b.recibo_id, b.fecha_recibo, SUM(b.monto), b.documento,
		 d.nombre_comercial,c.serie, c.numero_factura,b.forma_de_pago_id,c.cliente_id, a.status, 
		 b.banco_para_recibos_id, e.nombre, f.nombre
		 FROM recibo a inner join recibo_d b on a.id = b.recibo_id 
		 inner join factura c on c.id = b.factura_id inner join cliente d 
		 on d.id = c.cliente_id 
		 inner join forma_de_pago e on b.forma_de_pago_id = e.id
		 left join banco_para_recibos f on f.id = b.banco_para_recibos_id
		 WHERE b.recibo_id = " . $id . " GROUP BY b.recibo_id, b.fecha_recibo, b.documento,
		  d.nombre_comercial,c.serie, c.numero_factura,b.forma_de_pago_id,c.cliente_id,a.status,
		  b.banco_para_recibos_id, e.nombre ";
		//var_dump($query);
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	public function obtenerDatosbyId($tabla, $campo, $id)
	{
		$db = new ModeloBase();
		$query = "SELECT * from " . $tabla . " WHERE " . $campo . " = " . $id;
		$resultado = $db->consultarRegistro($query);
		return $resultado;
	}
	public function obtenerPedido($id)
	{
		$conn = new DB();
		$query = "SELECT  * FROM pedido
		 where id =" . $id;
		// var_dump($query);
		$resultado = $conn->query($query);
		// while ($row = $resultado->fetch()) {
		// 	$result = $row[0];
		//   }
		return $resultado;

	}
	public function obtenerPedidos($usuario_id)
	{
		$db = new ModeloBase();
		$query = "SELECT a.id, a.fecha_pedido,a.cliente_id, b.nit,razon_social,a.status from pedido a 
			inner join cliente b on a.cliente_id = b.id 
		where usuario_pedido_creado_id= " . $usuario_id;
		$resultado = $db->obtenerTodos($query);
		//echo $query;
		return $resultado;
	}

	public function obtenerRecibo($id)
	{
		$db = new ModeloBase();
		$query = "SELECT a.id, a.fecha_pedido,a.cliente_id, b.nit,razon_social,a.status from pedido a 
			inner join cliente b on a.cliente_id = b.id 
		where usuario_pedido_creado_id=" . $id;
		$resultado = $db->obtenerTodos($query);
		//echo $query;
		return $resultado;
	}
	public function obtenerDetalle($pedido_id)
	{
		$db = new ModeloBase();
		$query = "SELECT a.*,nombre_corto FROM pedido_d a
			INNER JOIN articulo b 
			on a.articulo_id = b.id
		WHERE a.pedido_id = " . $pedido_id;
		$resultado = $db->obtenerTodos($query);
		//var_dump($query);
		return $resultado;
	}

	public function autorizaDetalle($id)
	{
		//var_dump($id);
		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query = "UPDATE pedido SET status= 7 WHERE id =" . $id;
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function finalizaRecibo($id)
	{

		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query = "UPDATE recibo SET status= 7 WHERE id =" . $id;
			$resultado = $conn->query($query);

		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function insertarProducto($datos)
	{
		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query = "INSERT INTO articulo  (id,montoSolicitado, fechaSolicitud,tipoFact,nitProducto,dpiRepresentanteLegal,razonSocialProducto,nombreComercial,
			direccionProducto, telefonoProducto, usuario_created,horarios, referencias)
			VALUES (" . $datos['id']
				. ", " . $datos['montoSolicitado']
				. ", '" . $datos['fechaSolicitud']
				. "', '" . $datos['tipoFact']
				. "', '" . $datos['nitProducto']
				. "', '" . $datos['dpiRepresentanteLegal']
				. "', '" . $datos['razonSocialProducto']
				. "', '" . $datos['nombreComercial']
				. "', '" . $datos['direccionProducto']
				. "', '" . $datos['telefonoProducto']
				. "', '" . $datos['usuario']
				. "', '" . $datos['horarios']
				. "', '" . $datos['referencias']
				. "')";
			$resultado = $conn->query($query);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function insertarPedido($datos)
	{
		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query = "INSERT  INTO pedido (active,status,cliente_id,fecha_pedido,forma_de_pago,
                    transporte_id,observaciones, direccion_entrega,
                    usuario_pedido_creado_id) VALUES (1,1," . $datos['cliente_id']
				. ", '" . $datos['fecha_pedido']
				. "', " . $datos['forma_de_pago']
				. ", " . $datos['transporte_id']
				. ", '" . $datos['observaciones']
				. "', '" . $datos['direccion_entrega']
				. "', '" . $datos['usuario_pedido_creado_id']
				. "')";
			$resultado = $conn->query($query);
			if (!$resultado) {
				return false;
			} else {
				return $conn->lastInsertId();

			}
			///return $conn->mysql_insert_id();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function insertarRecibo($datos)
	{
		$conn = new DB();
		try {

			$query = "INSERT  INTO recibo (status,fecha_asignado, fecha_alta,usuario_id)
			 VALUES (2,'" . $datos['fecha_asignado']
				. "', '" . $datos['fecha_asignado']
				. "', " . $datos['usuario_id']
				. ")";

			$resultado = $conn->query($query);
			if (!$resultado) {
				return false;
			} else {
				return $conn->lastInsertId();
			}
			///return $conn->mysql_insert_id();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function insertarDetalleRecibo($datos)
	{
		$conn = new DB();
		try {

			$query = "INSERT  INTO recibo_d (status,recibo_id, 
			fecha_recibo, fecha_operacion, factura_id, monto, 
			forma_de_pago_id,
			documento, banco_para_recibos_id,usuario_id)
			 VALUES (3," . $datos['recibo_id']
				. ",'" . $datos['fecha_recibo']
				. "','" . $datos['fecha_operacion']
				. "', " . $datos['factura_id']
				. ", " . $datos['monto']
				. ", " . $datos['forma_de_pago_id']
				. ", " . $datos['documento']
				. ", " . $datos['banco_para_recibos_id']
				. ", " . $datos['usuario_id']
				. ")";
				print_R ($query);
				var_dump($query);
				$resultado = $conn->query($query);
				if (!$resultado) {
					return false;
				} else {
					return $conn->lastInsertId();
				}
				
			///return $conn->mysql_insert_id();
		} catch (PDOException $e) {

			echo $e->getMessage();
		}
	}
	public function insertarDetalle($datos)
	{
		//var_dump($datos );
		$conn = new DB();
		try {
			//$insertar = $db->insertar('articulo', $datos);
			$query = "INSERT  INTO pedido_d (active,pedido_id,tipo,articulo_id,
				cantidad, precio_local,precio_local_sin_iva,total,
				total_sin_iva,usuario_id
			) VALUES (1," . $datos['pedido_id']
				. ",1," . $datos['articulo_id']
				. ", " . $datos['cantidad']
				. ", " . $datos['precio_local']
				. ", " . $datos['precio_local_sin_iva']
				. ", " . $datos['total']
				. ", " . $datos['total_sin_iva']
				. ", " . $datos['usuario_id']
				. ")";
			$resultado = $conn->query($query);
			if (!$resultado) {
				return false;
			} else {
				//return $conn->lastInsertId();
				return $datos['pedido_id'];

			}
			///return $conn->mysql_insert_id();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function editarProducto($id, $datos)
	{
		$db = new ModeloBase();
		try {
			$editar = $db->editar('articulo', $id, $datos);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function eliminarProducto($id)
	{
		$db = new ModeloBase();
		try {
			$eliminar = $db->eliminar('articulo', $id);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}
