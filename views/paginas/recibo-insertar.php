<?php
    $usuario_id = $_SESSION['id_usuario'];
    $usuario = $_SESSION['nick'];
	
    require_once 'controllers/ProductoController.php';

    $pedido = new ProductoController();
    var_dump($_POST);
    if ($_POST['nuevo'] ){
        $datos = array(
            'forma' => $_POST['autoriza'],
            'pedido_id' => $_POST['pedido_id'],
            'usuario_id' =>$usuario_id,
            'status' => 1,
            'fecha_asignado' => date("Y-m-d"),
        );
       $pedido->insertarRecibo($datos);
    }else {
        
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
    
        $datos = array(    
        'pedido_id'   => $_POST['pedido_id'], 
		'articulo_id'   => $_POST['articulo_id'], 
        'cantidad' =>  $_POST['cantidad'],
        'precio_local' => round($_POST['precio'],2),
        'precio_local_sin_iva' => round($precio/1.12,2),
        'total' => $cantidad*$precio,
        'total_sin_iva' => ($cantidad*$precio)/1.12,
        'usuario_id' => $usuario_id,  
	);
//     if (empty($datos['articulo_id'])) {
// 		$respuesta['mensaje'] = "No puede insertar con campos vacíos";
// 		$respuesta['codigo'] = 400;
// //        echo json_encode($respuesta);
	
// 	} else {
// 		$pedido->insertarDetalle($datos);
// 	}   
}
 
?>