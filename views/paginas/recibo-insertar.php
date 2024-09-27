<?php
    $usuario_id = $_SESSION['id_usuario'];
    $usuario = $_SESSION['nick'];
	
    require_once 'controllers/ProductoController.php';
    $autoriza ="";
    $recibo = new ProductoController();
   // var_dump($_POST);
    if  (isset($_POST['autoriza']) ){
        $datos = array(
            'forma' => $_POST['autoriza'],
            'pedido_id' => $_POST['pedido_id'],
            'usuario_id' =>$usuario_id,
            'status' => 1,
            'fecha_asignado' => date("Y-m-d"),
        );
       $pedido->insertarRecibo($datos);
    }else {
        var_dump($_POST);
        $datos = array(    
        'recibo_id'   => $_POST['recibo_id'], 
        'fecha_recibo' => date("Y-m-d"),
        'fecha_operacion' => date("Y-m-d"),
		'factura_id'   => $_POST['factura_id'], 
        'monto' => $_POST['monto'],
        'forma_de_pago_id' => $_POST['forma_de_pago_id'],
        'documento' => $_POST['documento'],
        'banco_para_recibos_id' => $_POST['banco_id'],
        'usuario_id' => $usuario_id,
	);
    
    if (empty($datos['recibo_id'])) {
		$respuesta['mensaje'] = "No puede insertar con campos vacíos";
		$respuesta['codigo'] = 400;
        echo json_encode($respuesta);
	} else {
		$recibo->insertarDetalleRecibo($datos);
	}   
}
 
?>