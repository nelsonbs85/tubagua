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
			$cliente->insertarProducto($datos);
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
	public function insertarDetalle($datos) {
		
		$producto = new ProductoModel();
		$id = $producto->insertarDetalle($datos);
		$respuesta['mensaje'] = "Registro insertado correctamente";
		$respuesta['codigo'] = 200;
		header('Location: index.php?page=pedido&id=' .$id);	
	}
	public function obtenerProductos() {
		$producto = new ProductoModel();
		return $producto->obtenerProductos();
	}
	public function obtenerProducto($id) {
		$producto = new ProductoModel();
		return $producto->obtenerProducto($id);
	}
	public function obtenerProductobyDescripcion($descripcion) {
		$producto = new ProductoModel();
		return $producto->obtenerProducto($descripcion);
	}
	public function obtenerDatos($tabla,$campo) {
		$datos = new ProductoModel();
		return $datos->obtenerDatos($tabla,$campo);
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
}
}