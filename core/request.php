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
		'error' 			=> array('model' => 'UsuarioModel',	'view' => 'error', 	'controller' => 'InicioController'), 
		'cliente-insertar' 	=> array('model' => 'ClienteModel',	'view' => 'clienteInsertar', 	'controller' => 'ClienteController'), 
		'cliente-editar' 	=> array('model' => 'ClienteModel',	'view' => 'clienteEditar', 	'controller' => 'ClienteController'), 

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