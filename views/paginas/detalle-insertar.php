<?php
    $usuario_id = $_SESSION['id_usuario'];
    $usuario = $_SESSION['nick'];
	
    require_once 'controllers/ProductoController.php';
    
    $pedido = new ProductoController();
    if (isset($_POST['autoriza'] )){
        $cliente = $_POST['clienteid'];
        $datos = array(
            'autoriza' => $_POST['autoriza'],
            'pedido_id' => $_POST['pedido_id']
        );
        $pedido->autorizaDetalle($datos['pedido_id'], $cliente);

    }else {                
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $cliente = $_POST['clientei'];
        if (isset($_POST['fardo'])){
            $precio =$_POST['fardo'] ;
        }elseif (isset($_POST['mayorista'])){
            $precio =$_POST['mayorista'] ;
        }else  {
         $precio =round($_POST['precio'],2);
        }
        $datos = array(    
        'pedido_id'   => $_POST['pedido_id'], 
		'articulo_id'   => $_POST['articulo_id'], 
        'cantidad' =>  $_POST['cantidad'],
        'precio_local' => $precio,
        'precio_local_sin_iva' => round($precio/1.12,2),
        'total' => $cantidad*$precio,
        'total_sin_iva' => ($cantidad*$precio)/1.12,
        'usuario_id' => $usuario_id,  
	);
    if (empty($datos['articulo_id'])) {
		$respuesta['mensaje'] = "No puede insertar con campos vacíos";
		$respuesta['codigo'] = 400;
//        echo json_encode($respuesta);
	
	} else {
		$pedido->insertarDetalle($datos, $cliente);
	}   
}
 
?>