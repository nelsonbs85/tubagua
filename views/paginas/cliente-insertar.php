<?php 
$usuario_id = $_SESSION['id_usuario'];
	require_once 'controllers/ClienteController.php';

	$objeto = new ClienteController();
	$dias = array (
		'lunesa'=> '00:00',
		'juevesa'=> '00:00',
		'lunesde'=> '00:00',
		'martesa'=> '00:00',
		'sabadoa'=> '00:00',
		'domingoa'=> '00:00',
		'juevesde'=> '00:00',
		'martesde'=> '00:00',
		'sabadode'=> '00:00',
		'viernesa'=> '00:00',
		'domingode'=> '00:00',
		'viernesde'=> '00:00',
		'miercolesa'=> '00:00',
		'miercolesde'=> '00:00'
	);

	$referencias = array( 'cnt1'=> '',
    'cnt2'=> '',
    'cnt3'=> '',
    'dir1'=> '',
    'dir2'=> '',
    'dir3'=> '',
    'emp1'=> '',
    'emp2'=> '',
    'emp3'=> '',
    'tel1'=> '',
    'tel2'=> '',
    'tel3'=> '',
    'city1'=> '',
    'city2'=> '',
    'city3'=> '',
    'email1'=> '',
    'email2'=> '',
    'email3'=> '');
	
    $json2= json_encode($referencias);
    $json_referencias = json_decode($json2,true);
  //var_dump($json2);
	$clienteid= $objeto->obtenerClienteSig();
	
    $json = json_encode($dias);
    $object = json_decode($json,true);

	$datos = array(
		'idCliente'   => $clienteid, //htmlentities, limites caracteres y toda la seguridad...
        'montoSolicitado'   => $_POST['monto'],
        'fechaSolicitud'   => $_POST['fecha'],
		'tipoFact'   => $_POST['tipoPersona'],
        'nitCliente'   => $_POST['nit'],
        'dpiRepresentanteLegal'   => $_POST['dpiRepre'],
        'razonSocialCliente'   => $_POST['razon'],
        'nombreComercial'   => $_POST['nombreComercial'],
        'direccionCliente'   => $_POST['direccion'],
        'telefonoCliente'   => $_POST['tel'],
		'usuario'   => $_POST['nick'],
		'horarios' => $json,
		'referencias' => $json2,
	);

	var_dump($datos);
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