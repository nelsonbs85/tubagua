<?php

// session_destroy();
if (!isset($_SESSION['id_usuario'])) {
     session_start();
 }

//si existe una sesion 'id usuario' y si una variable de sesion 'login' es 'ok'
if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {

	require_once './models/ClienteModel.php';

class ClienteController {

	#estableciendo las vistas
	public function formulario() {

			//session_start();
		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/formulario.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function edformulario() {
		//session_start();

		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {

	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/edformulario.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function estadocuenta(){
		//session_start();

		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {

	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/estadocuenta.php');
	        require_once('./views/includes/pie.php');
		} else{
			header('Location: index.php?page=login');
            die();
		}
	}
	public function listacliente() {
		// if (!isset($_SESSION['id_usuario'])) {
		// 	session_start();
		// }
		if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	        require_once('./views/includes/cabecera.php');
	        require_once('./views/includes/navbar.php');
	        require_once('./views/paginas/listacliente.php');
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
	
	public function formularioInsertar() {
		//$nivelAcceso = $this->obtenerNivel();
	////	if ($nivelAcceso >= 2){
			require_once('./views/paginas/formulario-insertar.php');
		//}else{
		//	header('Location: index.php?page=error');
		//	die();
	//	}
	}

	public function formularioEditar() {
		//$nivelAcceso = $this->obtenerNivel();
	////	if ($nivelAcceso >= 2){
			require_once('./views/paginas/formulario-editar.php');
		//}else{
		//-	header('Location: index.php?page=error');
		//	die();
	//	}
	}

	public function autoriza() {
		//$nivelAcceso = $this->obtenerNivel();
	////	if ($nivelAcceso >= 2){
			require_once('./views/paginas/autoriza-form.php');
		//}else{
		//	header('Location: index.php?page=error');
		//	die();
	//	
	}
	public function archivoInsertar() {
		//$nivelAcceso = $this->obtenerNivel();
	////	if ($nivelAcceso >= 2){
			require_once('./views/paginas/subir-archivo.php');
		//}else{
		//	header('Location: index.php?page=error');
		//	die();
	//	}
	}
	public function insertarCliente($datos) {

			$cliente = new ClienteModel();
			$cliente->insertarCliente($datos);
			$respuesta['mensaje'] = "Registro insertado correctamente";
			$respuesta['codigo'] = 200;
			echo json_encode($respuesta, JSON_PRETTY_PRINT);
			header('Location: index.php?page=listacliente');
		//}
	}
	

	public function editarFormulario($id,$datos) {

		$cliente = new ClienteModel();
		$cliente->editarFormulario($id,$datos);
		$respuesta['mensaje'] = "Registro actualizado correctamente";
		$respuesta['codigo'] = 200;
		echo json_encode($respuesta, JSON_PRETTY_PRINT);
		header('Location: index.php?page=edformulario&id=' .$id);
	//}
}
	public function editarCliente($id, $datos) {
		$cliente = new ClienteModel();
		$cliente->editarCliente($id, $datos);
	}
	public function eliminarCliente($id) {
		$cliente = new ClienteModel();
		$cliente->eliminarCliente($id);
	}
	public function obtenerClientes() {
		$clientes = new ClienteModel();
		return $clientes->obtenerClientes();
	}
	public function listarClientes() {
		$clientes = new ClienteModel();
		return $clientes->listarClientes();
	}
	public function obtenerCliente($id) {
		$cliente = new ClienteModel();
		return $cliente->obtenerCliente($id);
	}
	public function obtenerClienteSig() {
		$cliente = new ClienteModel();
		return $cliente->obtenerClienteSig();
	}
	public function subirArchivo($id, $orden,$datos) {
		$clientes = new ClienteModel();
		$clientes->subirArchivo($id, $orden,$datos);
		header('Location: index.php?page=edformulario&id=' .$id);
	}
	public function autorizaForm($id, $datos) {
		$clientes = new ClienteModel();
		$clientes->autorizaForm($id,$datos); 
		header('Location: index.php?page=edformulario&id=' .$id);
	}
	public function obtenerFormulario($id) {
		$clientes = new ClienteModel();
		return $clientes->obtenerFormulario($id);
	}
	public function obtenerDatosCliente($id) {
		$clientes = new ClienteModel();
		return $clientes->obtenerDatosCliente($id);
	}
	public function obtenerDatosClientes() {
		$clientes = new ClienteModel();
		return $clientes->obtenerDatosClientes();
	}
	
	public function obtenerDatosClientebyDesc($search) {
		$clientes = new ClienteModel();
		return $clientes->obtenerDatosClientebyDesc(trim($search));
	}
	
	public function obtenerListaPedidos($idCliente) {
		$clientes = new ClienteModel();
		return $clientes->obtenerListaPedidos(trim($idCliente));
	}
}
}