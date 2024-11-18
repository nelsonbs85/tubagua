<?php

    require_once 'controllers/ClienteController.php';
    
    $objeto = new ClienteController();
    $id = $_POST['idform'];
   
    $dias = array(
        'lunesde' => $_POST['lunesde'],
        'martesde' => $_POST['martesde'],
        'miercolesde' => $_POST['miercolesde'],
        'juevesde' => $_POST['juevesde'],
        'viernesde' => $_POST['viernesde'],
        'sabadode' => $_POST['sabadode'],
        'domingode' => $_POST['domingode'],
        'lunesa' => $_POST['lunesa'],
        'martesa' => $_POST['martesa'],
        'miercolesa' => $_POST['miercolesa'],
        'juevesa' => $_POST['juevesa'],
        'viernesa' => $_POST['viernesa'],
        'sabadoa' => $_POST['sabadoa'],
        'domingoa' => $_POST['domingoa'],
    );

    
    $referencias = array(
        'emp1' => $_POST['emp1'],        
        'cnt1' => $_POST['cnt1'],        
        'city1' => $_POST['city1'],        
        'dir1' => $_POST['dir1'],        
        'tel1' => $_POST['tel1'],        
        'email1' => $_POST['email1'],        
        
        'emp2' => $_POST['emp2'],        
        'cnt2' => $_POST['cnt2'],        
        'city2' => $_POST['city2'],        
        'dir2' => $_POST['dir2'],        
        'tel2' => $_POST['tel2'],        
        'email2' => $_POST['email2'],

        
        'emp3' => $_POST['emp3'],        
        'cnt3' => $_POST['cnt3'],        
        'city3' => $_POST['city3'],        
        'dir3' => $_POST['dir3'],        
        'tel3' => $_POST['tel3'],        
        'email3' => $_POST['email3'],
    );

    $json = json_encode($dias);
    $object = json_decode($json,true);
  //  var_dump($object);
    
    $json2= json_encode($referencias);
    $json_referencias = json_decode($json2,true);
  //var_dump($json2);

    $datos = array(
        'idform' => $_POST['idform'],
        'montoSolicitado'   => $_POST['monto'],
        'fechaSolicitud'   => $_POST['fecha'],
		'tipoFact'   => $_POST['tipoPersona'],
        'nitCliente'   => $_POST['nit'],
        'dpiRepresentanteLegal'   => $_POST['dpiRepre'],
        'razonSocialCliente'   => $_POST['razon'],
        'nombreComercial'   => $_POST['nombreComercial'],
        'direccionCliente'   => $_POST['direccion'],
        'telefonoCliente'   => $_POST['tel'],
        			//2.datos del representante legal
			'nombreRepre' => $_POST['nombreRepre'],
			'direccionRepre' => $_POST['direccionRepre'],
			'ciudadRepre' => $_POST['ciudadRepre'],
			'telefonoRepre' => $_POST['telefonoRepre'],
			'celularRepre' => $_POST['celularRepre'],
			'emailRepre' => $_POST['emailRepre'],
            	//3. información de pagos
			'nombrePagos' => $_POST['nombrePagos'],
			'telOficinaPagos' => $_POST['telOficinaPagos'],
			'telParticularPagos' => $_POST['telParticularPagos'],
			'telCelularPagos' => $_POST['telCelularPagos'],
			'emailPagos' => $_POST['emailPagos'],
            //4.datos del local
            'horarios' => $json,
            'localExterior' => $_POST['localExterior'],
            'noEmpleados' => $_POST['noEmpleados'],
            'localSucursales' => $_POST['localSucursales'],
            'localCuantos' => $_POST['localCuantos'],
            'ubicacionSucursales' => $_POST['ubicacionSucursales'],
            //5 referencias
            'referencias' => $json2,
            /*'firma' => $signature,
            'fechaAutorizacion' => $fechaAutorizacion,
            'lugarAutorizacion' => $lugarAutorización,
            'Autorizado' => $Autorizado,*/
            
	);
        
    $objeto->editarFormulario($id, $datos);

?>
