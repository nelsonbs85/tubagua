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
	public function error() {
        require_once('./views/includes/cabecera.php');
        require_once('./views/paginas/error.php');
        require_once('./views/includes/pie.php');
	}
	
	public function productoEditar() {
		//$nivelAcceso = $this->obtenerNivel();
	////	if ($nivelAcceso >= 2){
			require_once('./views/paginas/producto-editar.php');
		//}else{
		//-	header('Location: index.php?page=error');
		//	die();
	//	}
	}

	
	public function insertarProducto($datos) {

			$producto = new ProductoModel();
			$cliente->insertarProducto($datos);
			$respuesta['mensaje'] = "Registro insertado correctamente";
			$respuesta['codigo'] = 200;
			echo json_encode($respuesta, JSON_PRETTY_PRINT);
			header('Location: index.php?page=listaproducto');
		//}
	}

	public function obtenerProductos() {
		$producto = new ProductoModel();
		return $producto->obtenerProductos();
	}
	public function obtenerProducto($id) {
		$producto = new ProductoModel();
		return $producto->obtenerProducto($id);
	}
}
}