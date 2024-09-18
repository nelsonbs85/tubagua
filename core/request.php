<?php
require_once 'config.php';
$page = $_GET['page'];

if (!empty($page)) {
	$data = array(
		'login' 			=> array('model' => 'UsuarioModel', 'view' => 'login', 	'controller' => 'UsuarioController'),
		'inicio' 			=> array('model' => 'UsuarioModel',	'view' => 'inicio', 'controller' => 'InicioController'), 
		'cliente'			=> array('model' => 'ClienteModel',	'view' => 'cliente', 'controller' => 'ClienteController'), 
		'edcliente'			=> array('model' => 'ClienteModel',	'view' => 'edcliente', 'controller' => 'ClienteController'), 
		'listacliente'		=> array('model' => 'ClienteModel',	'view' => 'listacliente', 'controller' => 'ClienteController'), 
		'listaproducto'		=> array('model' => 'ProductoModel','view' => 'listaproducto', 'controller' => 'ProductoController'), 
		'listadepositos'		=> array('model' => 'ProductoModel','view' => 'listadeposito', 'controller' => 'ProductoController'), 
		'recibo'		=> array('model' => 'ProductoModel','view' => 'recibo', 'controller' => 'ProductoController'), 
		'listafacturas'		=> array('model' => 'ProductoModel','view' => 'listafacturas', 'controller' => 'ProductoController'), 
		'error' 			=> array('model' => 'UsuarioModel',	'view' => 'error', 	'controller' => 'InicioController'), 
		'listapedido'		=> array('model' => 'ProductoModel','view' => 'listapedido', 'controller' => 'ProductoController'), 
		'cliente-insertar' 	=> array('model' => 'ClienteModel',	'view' => 'clienteInsertar', 	'controller' => 'ClienteController'), 
		'cliente-editar' 	=> array('model' => 'ClienteModel',	'view' => 'clienteEditar', 	'controller' => 'ClienteController'), 
		'detalle-insertar' 	=> array('model' => 'ProductoModel',	'view' => 'detalleInsertar', 	'controller' => 'ProductoController'), 
		'subir-archivo' 	=> array('model' => 'ClienteModel',	'view' => 'archivoInsertar', 	'controller' => 'ClienteController'), 
		'autoriza-form' 	=> array('model' => 'ClienteModel',	'view' => 'autoriza', 	'controller' => 'ClienteController'), 
		'pedido' 			=> array('model' => 'ProductoModel', 'view' => 'pedido', 	'controller' => 'ProductoController'), 
		'pedido-insertar' 	=> array('model' => 'ProductoModel','view' => 'pedidoInsertar', 	'controller' => 'ProductoController'), 
		'recibo-insertar' 	=> array('model' => 'ProductoModel','view' => 'reciboInsertar', 	'controller' => 'ProductoController'), 
		

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