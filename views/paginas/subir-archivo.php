<?php
    require_once 'controllers/ClienteController.php';
    $objeto = new ClienteController();
    $id = $_POST['idForm'];
	$orden= $_POST['orden'];
    switch($orden){
        case 1 : $campo = 'RTU';break;
        case 2 : $campo = 'Patente';break;
        case 3 : $campo = 'Ref1';break;
        case 4 : $campo = 'Ref2';break;
        case 5 : $campo = 'Ref3';break;
    }
 /*SUBIR ARCHIVOS*/ 
     $dir="files/" .$id;
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
    $file = pathinfo($_FILES['uploadfile']["name"]);

    $extension = $file['extension'];

 //$archivo = $dir ."/" .basename($_FILES['uploadfile']['name']);
 $archivo = $dir ."/" .$campo ."." .$extension;
 move_uploaded_file($_FILES['uploadfile']["tmp_name"],$archivo);

     // Preparar la consulta SQL
       
    $datos = array(
        'idform' => $_POST['idForm'],            
		'orden' => $_POST['orden'],            
		'file' => $archivo,            
	);
    var_dump($_FILES);
    if ($extension) {
        $objeto->subirArchivo($id,$orden, $datos);
    }else{
        header('Location: index.php?page=edformulario&id=' .$id);
    }
    

?>
