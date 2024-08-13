<?php 

	require_once 'controllers/ClienteController.php';

	$objeto = new ClienteController();

	$datos = array(
		'idCliente'   => 100, //htmlentities, limites caracteres y toda la seguridad...
        'tipoFact'   => $_POST['chkJuridico'],
        'nitCliente'   => $_POST['nit'],
        'dpiRepresentanteLegal'   => $_POST['dpiRepre'],
        'razonSocialCliente'   => $_POST['razon'],
        'nombreComercial'   => $_POST['nombreComercial'],
        'direccionCliente'   => $_POST['direccion'],
        'telefonoCliente'   => $_POST['tel'],
	);
    //$respuesta['mensaje'] = $datos;
    //validaciones: campo vacio, tipo de dato, comparacion con otros campos del formulario...
	if (empty($datos['idCliente'])) {
		$respuesta['mensaje'] = "No puede insertar con campos vacíos";
		$respuesta['codigo'] = 400;
        echo json_encode($respuesta);
	/*} else if (is_numeric($datos['idcliente'])) {
		$respuesta['mensaje'] = "No puede ingresar números" ;
		$respuesta['codigo'] = 400;
		echo json_encode($respuesta);
    //    header('Location: index.php?page=cliente');*/
	} else {
        
		//aqui debe ir el array completamente depurado, validado
		//sin caracteres raros, campos numericos o emails validados, longitud correcta etc...
		$objeto->insertarCliente($datos);
      

	}
    
?>  