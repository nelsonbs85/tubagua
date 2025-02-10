<?php
// session_destroy();
if (!isset($_SESSION['id_usuario'])) {
     session_start();
 }

//si existe una sesion 'id usuario' y si una variable de sesion 'login' es 'ok'
if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {

	require_once './models/ProductoModel.php';

class ProductoController {

	#estableciendo las vistas
	public function producto() {

			//session_start();
		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/listaproducto.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function pedido() {
	//  if (!isset($_SESSION['id_usuario'])) {
		//  	session_start();
		//  }
		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {

	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/pedido.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function recibo() {
		//  if (!isset($_SESSION['id_usuario'])) {
			//  	session_start();
			//  }
			if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	
				require_once('./views/includes/cabecera.php');
				require_once('./views/includes/navbar.php');
				require_once('./views/paginas/recibo.php');
				require_once('./views/includes/pie.php');
			} else{
				header('Location: index.php?page=login');
				die();
			}
		}
		
	public function pedidoInsertar() {

	if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
		require_once('./views/includes/cabecera.php');
		require_once('./views/includes/navbar.php');
		require_once('./views/paginas/pedido-insertar.php');
		require_once('./views/includes/pie.php');
	} else{
		header('Location: index.php?page=login');
		die();
	}
}
public function reciboInsertar() {

	if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
		require_once('./views/includes/cabecera.php');
		require_once('./views/includes/navbar.php');
		require_once('./views/paginas/recibo-insertar.php');
		require_once('./views/includes/pie.php');
	} else{
		header('Location: index.php?page=login');
		die();
	}
}

public function detalleInsertar() {

	if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
		require_once('./views/includes/cabecera.php');
		require_once('./views/includes/navbar.php');
		require_once('./views/paginas/detalle-insertar.php');
		require_once('./views/includes/pie.php');
	} else{
		header('Location: index.php?page=login');
		die();
	}
}
	public function listaproducto() {
		//  if (!isset($_SESSION['id_usuario'])) {
		//  	session_start();
		//  }
		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/listaproducto.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function listaproductoreal() {
		//  if (!isset($_SESSION['id_usuario'])) {
		//  	session_start();
		//  }
		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/listaproductoreal.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function listadeposito() {
		//  if (!isset($_SESSION['id_usuario'])) {
		//  	session_start();
		//  }
		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/listadeposito.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function listafacturas() {
		//  if (!isset($_SESSION['id_usuario'])) {
		//  	session_start();
		//  }
		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/listafacturas.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function listapedido() {
		//  if (!isset($_SESSION['id_usuario'])) {
		//  	session_start();
		//  }
		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/listapedido.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function error() {
        require_once('./views/includes/cabecera.php');
        require_once('./views/paginas/error.php');
        require_once('./views/includes/pie.php');
	}

	public function insertarProducto($datos) {

			$producto = new ProductoModel();
			$cliente= $producto->insertarProducto($datos);
			$respuesta['mensaje'] = "Registro insertado correctamente";
			$respuesta['codigo'] = 200;
	//		echo json_encode($respuesta, JSON_PRETTY_PRINT);
			header('Location: index.php?page=listaproducto');
		//}
	}
	public function insertarPedido($datos) {
		
		$producto = new ProductoModel();
		$id = $producto->insertarPedido($datos);
		$respuesta['mensaje'] = "Registro insertado correctamente";
		$respuesta['codigo'] = 200;
		header('Location: index.php?page=pedido&id=' .$id);	
	}

	
	public function insertarRecibo($idCliente,$datos) {
		
		$recibo = new ProductoModel();
		$id = $recibo->insertarRecibo($datos);
		$respuesta['mensaje'] = "Registro insertado correctamente";
		$respuesta['codigo'] = 200;
		//header('Location: index.php?page=recibo&idCliente=' .$idCliente);	
		return $id;
		
	}

	public function insertarDetalleRecibo($datos) {
		
		$recibo = new ProductoModel();
		$id = $recibo->insertarDetalleRecibo($datos);
		$respuesta['mensaje'] = "Registro insertado correctamente";
		$respuesta['codigo'] = 200;
		
	}
	public function insertarDetalle($datos) {
		
		$producto = new ProductoModel();
		$id = $producto->insertarDetalle($datos);
		$respuesta['mensaje'] = "Registro insertado correctamente";
		$respuesta['codigo'] = 200;
		header('Location: index.php?page=pedido&id=' .$id);	
	}
	public function ClienteTienePendiente($idCliente) {
		$producto = new ProductoModel();
		return $producto->ClienteTienePendiente($idCliente);
	}
	public function obtenerProductos() {
		$producto = new ProductoModel();
		return $producto->obtenerProductos();
	}
	public function obtenerProductosreal() {
		$producto = new ProductoModel();
		return $producto->obtenerProductosreal();
	}
	public function obtenerFacturas() {
		$producto = new ProductoModel();
		return $producto->obtenerFacturas();
	}

	public function obtenerFacturasbyCliente($id) {
		$producto = new ProductoModel();
		return $producto->obtenerFacturasbyCliente($id);
	}

	public function obtenerDepositos($usuario_id) {
		$producto = new ProductoModel();
		return $producto->obtenerDepositos($usuario_id);
	}

	public function obtenerRecibosbyId($id) {
		$producto = new ProductoModel();
		return $producto->obtenerRecibosbyId($id);
	}
	public function obtenerProducto($id) {
		$producto = new ProductoModel();
		return $producto->obtenerProducto($id);
	}
	public function obtenerProductobyDescripcion($descripcion) {
		$producto = new ProductoModel();
		return $producto->obtenerProducto($descripcion);
	}
	public function obtenerDatos($tabla,$campo,) {
		$datos = new ProductoModel();
		return $datos->obtenerDatos($tabla,$campo);
	}
	public function obtenerDatosMunicipio($depto) {
		$datos = new ProductoModel();
		return $datos->obtenerDatosMunicipio($depto);
	}
	
	public function obtenerDetalleRecibobyId($id) {
		$datos = new ProductoModel();
		return $datos->obtenerDetalleRecibobyId($id);
	}
	public function obtenerDatosbyId($tabla,$campo,$id) {
		$datos = new ProductoModel();
		return $datos->obtenerDatos($tabla,$campo,$id);
	}
	public function obtenerPedidos($usuario_id) {
		$datos = new ProductoModel();
		return $datos->obtenerPedidos($usuario_id);
	}
	public function obtenerDetalle($pedido_id) {
		$datos = new ProductoModel();
		return $datos->obtenerDetalle($pedido_id);
	}
	public function obtenerPedido($pedido_id) {
		$datos = new ProductoModel();
		return $datos->obtenerPedido($pedido_id);
	}
	public function autorizaDetalle($id) {
		$datos = new ProductoModel();
		$upda = $datos->autorizaDetalle($id);
		header('Location: index.php?page=pedido&id=' .$id);	
	}
	public function finalizaRecibo($id,$idCliente) {

		$datos = new ProductoModel();
		$upda = $datos->finalizaRecibo($id);
		header('Location: index.php?page=recibo&idRecibo=' .$id .'&idCliente=' .$idCliente);	
	}
}
}