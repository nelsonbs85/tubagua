<?php
  $usuario_id = $_SESSION['id_usuario'];
    $usuario = $_SESSION['nick'];
	
    require_once 'controllers/ProductoController.php';
    $autoriza ="";


   $recibo = new ProductoController();
       
    if (isset($_GET['idCliente'])) {
        $idCliente=$_GET['idCliente'];
        }
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
        $chks =array_filter($_POST,function($clave){
            return strpos($clave,'chk')===0;
        }, ARRAY_FILTER_USE_KEY);
        $nchek = [];
        foreach($chks as $clave =>$valor){
            $nclave = str_replace('chk','',$clave);
            $nchek[$nclave]=$valor;
        }
        $facturas =array_filter($_POST,function($clave){
            return strpos($clave,'fac')===0;
        }, ARRAY_FILTER_USE_KEY);
        $nfacturas = [];
        foreach($facturas as $clave =>$valor){
            $nclave = str_replace('fac','',$clave);
            $nfacturas[$nclave]=$valor;
        }
        
        $abonos =array_filter($_POST,function($clave){
            return strpos($clave,'abn')===0;
        }, ARRAY_FILTER_USE_KEY);
        $nabonos = [];
        foreach($abonos as $clave =>$valor){
            $nclave = str_replace('abn','',$clave);
            $nabonos[$nclave]=$valor;
        }
        $contador = $_POST['contador'];
        $datos = array(    
        'idCliente'   => $_POST['cliented'], 
        'recibo_id'   => $_POST['recibod'], 
        'fecha_recibo' =>  $_POST['fechaRecibod'], 
        'fecha_operacion' => date("Y-m-d"),
		// 'factura_id'   => $_POST['factura_id'], 
        // 'monto' => $_POST['abono'],
        'forma_de_pago_id' => $_POST['formapagod'],
        'documento' => $_POST['documentod'],
        'banco_para_recibos_id' => $_POST['banco_idd'],
        'usuario_id' => $usuario_id,
	);
    
    if (empty($datos['recibo_id'])) {
		$respuesta['mensaje'] = "No puede insertar con campos vacíos";
		$respuesta['codigo'] = 400;
        echo json_encode($respuestax);
	} else {
        foreach($nchek as $clave => $valor){
            $datos = array(    
                'idCliente'   => $_POST['cliented'], 
                'recibo_id'   => $_POST['recibod'], 
                'fecha_recibo' =>  $_POST['fechaRecibod'], 
                'fecha_operacion' => date("Y-m-d"),
                 'factura_id'   => $clave, 
                 'monto' => $nabonos[$clave], 
                'forma_de_pago_id' => $_POST['formapagod'],
                'documento' => $_POST['documentod'],
                'banco_para_recibos_id' => $_POST['banco_idd'],
                'usuario_id' => $usuario_id,
            );
         //   var_dump($datos);
         $recibo->insertarDetalleRecibo($datos);
        }   
		
        header('Location: index.php?page=recibo&idrecibo=' .$datos['recibo_id'] .'&idCliente=' .$datos['idCliente']);	
	}   
}
 
?>