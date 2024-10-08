<?php
// if(!isset($_SESSION)) 
// { 
// 	session_start(); 
// } 
require_once 'models/UsuarioModel.php';

class UsuarioController {

	public function login() {
		if(!isset($_SESSION)) 
		{ 
			session_start(); 
			session_destroy();
		} 	
		
			    
	    require_once('./views/includes/cabecera.php');
	    require_once('./views/paginas/login.php');
	    require_once('./views/includes/pie.php');
	}

	public function accesoUsuario($datos) {
		session_start(); 
		$usuario = new Usuario();
		$respuesta = $usuario->accesoUsuario($datos['nick'], $datos['password']);
		if ($respuesta != false) {
			foreach ($respuesta as $r) {
				$_SESSION['id_usuario'] = $r['id'];
				$_SESSION['nombre'] = $r['nombres'] ." " . $r['apellidos'];;
				$_SESSION['nick'] = $r['usuario']; 
				$_SESSION['login'] = 'ok';
			}
			header('Location: index.php?page=inicio');
        	die();
		} else{
			header('Location: index.php?page=login&mensaje=Usuario o Contraseña incorrecta');
        	die();
		}
	}

	public function cerrarSesion() {
		if(!isset($_SESSION))  {
		session_start();
		session_destroy();
		}
		header('Location: index.php?page=login');
	}

}