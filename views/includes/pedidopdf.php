<?php
require_once './controllers/pdfPedidoController.php';

// require_once('fpdf/fpdf.php');
if (isset($_GET['id'])){
    $id = $_GET['id'];

   
}

$fpdf = new pdfPedidoController;
$pdf = $fpdf->creaPdf($id);   

?>