<?php
require_once 'config.php';
$page = $_GET['page'];

if (!empty($page)) {
	$data = array(
		'login' 			=> array('model' => 'UsuarioModel', 'view' => 'login', 	'controller' => 'UsuarioController'),
		'inicio' 			=> array('model' => 'UsuarioModel',	'view' => 'inicio', 'controller' => 'InicioController'), 
		'cliente'			=> array('model' => 'ClienteModel',	'view' => 'cliente', 'controller' => 'ClienteController'), 
		'formulario'		=> array('model' => 'ClienteModel',	'view' => 'formulario', 'controller' => 'ClienteController'), 
		'estadocuenta'			=> array('model' => 'ClienteModel',	'view' => 'estadocuenta', 'controller' => 'ClienteController'), 
		'recibo'		=> array('model' => 'ProductoModel','view' => 'recibo', 'controller' => 'ProductoController'), 
	
		'edformulario'			=> array('model' => 'ClienteModel',	'view' => 'edformulario', 'controller' => 'ClienteController'), 
		'listacliente'		=> array('model' => 'ClienteModel',	'view' => 'listacliente', 'controller' => 'ClienteController'), 
		'listaproducto'		=> array('model' => 'ProductoModel','view' => 'listaproducto', 'controller' => 'ProductoController'), 
		'listadepositos'		=> array('model' => 'ProductoModel','view' => 'listadeposito', 'controller' => 'ProductoController'), 
	
		'listafacturas'		=> array('model' => 'ProductoModel','view' => 'listafacturas', 'controller' => 'ProductoController'), 
		'error' 			=> array('model' => 'UsuarioModel',	'view' => 'error', 	'controller' => 'InicioController'), 
		'listapedido'		=> array('model' => 'ProductoModel','view' => 'listapedido', 'controller' => 'ProductoController'), 
		'formulario-insertar' 	=> array('model' => 'ClienteModel',	'view' => 'formularioInsertar', 	'controller' => 'ClienteController'), 
		'formulario-editar' 	=> array('model' => 'ClienteModel',	'view' => 'formularioEditar', 	'controller' => 'ClienteController'), 
		'detalle-insertar' 	=> array('model' => 'ProductoModel',	'view' => 'detalleInsertar', 	'controller' => 'ProductoController'), 
		'subir-archivo' 	=> array('model' => 'ClienteModel',	'view' => 'archivoInsertar', 	'controller' => 'ClienteController'), 
		'autoriza-form' 	=> array('model' => 'ClienteModel',	'view' => 'autoriza', 	'controller' => 'ClienteController'), 
		'pedido' 			=> array('model' => 'ProductoModel', 'view' => 'pedido', 	'controller' => 'ProductoController'), 
		'pedido-insertar' 	=> array('model' => 'ProductoModel','view' => 'pedidoInsertar', 	'controller' => 'ProductoController'), 
		'recibo-insertar' 	=> array('model' => 'ProductoModel','view' => 'reciboInsertar', 	'controller' => 'ProductoController'), 
		'recibopdf' 	=> array('model' => 'pdfModel','view' => 'recibopdf', 	'controller' => 'pdfController'), 
		

	);

	foreach($data as $key => $components) {
		$view = $components['view'];
		if ($page == $key) {
			$model = $components['model'];
			$controller = $components['controller'];
			break;
		}
	}

	if (isset($model)) {
		
		//require_once 'controllers/'.$controller.'.php';
		include_once 'controllers/'.$controller.'.php';
		$objeto = new $controller();
		$objeto->$view();
	}
} else {
	header('Location: index.php?page=login');
}