<?php 
$usuario_id = $_SESSION['id_usuario'];
$usuario = $_SESSION['nick'];
	require_once 'controllers/ClienteController.php';

	$objeto = new ClienteController();	
    

	$datos = array(
		'idCliente' => $_POST['idCliente'],
		'codigo'   => $_POST['codigo'], //htmlentities, limites caracteres y toda la seguridad...
        'nit'   => $_POST['nit'],
        'cui'   => $_POST['cui'],
		'nombre_comercial'   => $_POST['nombrecomercial'],
        'razon_social'   => $_POST['razonsocial'],
        'limite_credito'   => $_POST['limite'],
        'dias_credito'   => $_POST['diascredito'],
        'direccion_facturacion'   => $_POST['dirFactura'],
        'departamento_id'   => $_POST['deptoFactura'],
        'municipio_id'   => (int)$_POST['muniFactura'],
		'fecha_alta'   => date("Y-m-d"),
		'usuario'   => $usuario_id
	);

	if (isset($_POST['actualiza'])=='S'){

		$objeto->updateCliente($datos);
		}else {
		//validaciones: campo vacio, tipo de dato, comparacion con otros campos del formulario...
		if (empty($datos['codigo'])) {
			$respuesta['mensaje'] = "No puede insertar con campos vacíos";
			$respuesta['codigo'] = 400;
			echo json_encode($respuesta);
		} else {
			
			$objeto->addCliente($datos);
		
		}
	}
    
?>  