<?php
require_once './controllers/pdfController.php';

// require_once('fpdf/fpdf.php');
if (isset($_GET['id'])){
    $id = $_GET['id'];

   
}

$fpdf = new pdfController;
$pdf = $fpdf->creaPdf($id);   

?>