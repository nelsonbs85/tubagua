<?php
    require_once 'controllers/ClienteController.php';
    $objeto = new ClienteController();
    $id = $_POST['id'];
	$orden= $_POST['orden'];
//	var_dump($_POST);
 /*SUBIR ARCHIVOS*/ 
     $dir="files/" .$id;
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
 $archivo = $dir ."/" .basename($_FILES['uploadfile']['name']);
 move_uploaded_file($_FILES['uploadfile']["tmp_name"],$archivo);

     // Preparar la consulta SQL
       
    $datos = array(
        'idform' => $_POST['id'],            
		'orden' => $_POST['orden'],            
		'file' => $archivo,            
	);
        
    $objeto->subirArchivo($id,$orden, $datos);

?>
