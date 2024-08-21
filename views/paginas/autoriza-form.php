<?php

    require_once 'controllers/ClienteController.php';

         $signature = $_POST['svg-data'];  
         $Autorizado = 'A';
         $fechaAutorizacion = $_POST['fechaAutorizacion'];  
         $lugarAutorización = $_POST['lugarAutorizacion'];  

            $objeto = new ClienteController();
            $id = $_POST['idform'];
            $datos = array(
                'idform' => $_POST['idform'],
                    'firma' => $signature,
                    'fechaAutorizacion' => $fechaAutorizacion,
                    'lugarAutorizacion' => $lugarAutorización,
                    'Autorizado' => $Autorizado,
            );
                
    $objeto->autorizaForm($id, $datos);
    //var_dump($_POST);

?>
