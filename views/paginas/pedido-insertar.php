<?php
    $usuario_id = $_SESSION['id_usuario'];
    $usuario = $_SESSION['nick'];
	
    require_once 'controllers/ProductoController.php';

    $pedido = new ProductoController();
    
	$datos = array(
		'cliente_id'   => $_POST['clienteId'], 
        'fecha_pedido' =>  $_POST['fechapedido'], 
        'forma_de_pago' => $_POST['formaPago'],
        'transporte_id' => $_POST['transporte'],
        'observaciones' => trim($_POST['pedidoObser']),
        'direccion_entrega' => trim($_POST['dirEntrega']),  
        'usuario_pedido_creado_id' => $usuario_id,  
	);


	if (empty($datos['cliente_id'])) {
		$respuesta['mensaje'] = "No puede insertar con campos vacíos";
		$respuesta['codigo'] = 400;
//        echo json_encode($respuesta);
	
	} else {
		$pedido->insertarPedido($datos);
	}    
?>