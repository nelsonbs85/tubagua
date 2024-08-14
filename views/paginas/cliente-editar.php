<?php

    require_once 'controllers/ClienteController.php';

    $objeto = new ClienteController();
    $id = $_POST['idForm'];
    $datos = array(
        'montoSolicitado'   => $_POST['monto'],
        'fechaSolicitud'   => $_POST['fecha'],
		'tipoFact'   => $_POST['tipoPersona'],
        'nitCliente'   => $_POST['nit'],
        'dpiRepresentanteLegal'   => $_POST['dpiRepre'],
        'razonSocialCliente'   => $_POST['razon'],
        'nombreComercial'   => $_POST['nombreComercial'],
        'direccionCliente'   => $_POST['direccion'],
        'telefonoCliente'   => $_POST['tel']
	);
        
    $objeto->editarFormulario($id, $datos);

?>
