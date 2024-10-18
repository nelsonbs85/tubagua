<?php
if (!isset($_SESSION['id_usuario'])) {
	session_start();
}

//si existe una sesion 'id usuario' y si una variable de sesion 'login' es 'ok'
if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {

	require_once './controllers/ProductoController.php';
	require_once './controllers/ClienteController.php';
	require_once './views/includes/fpdf/fpdf.php';

	class pdfController {
		public function recibopdf(){
			if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	            require_once('./views/includes/recibopdf.php');
	          
	        }else{
	            header('Location: index.php?page=error');
	            die();
	        }
		}
		public function creaPdf($id){

	
			$objRecibo = new ProductoController;
			$objCliente = new ClienteController;
			$recibo= $objRecibo->obtenerRecibosbyId($id);
			$detalle= $objRecibo->obtenerRecibosbyId($id);
			$pdf = new FPDF('P', 'mm', array(75,125));
			$pdf->AddPage();
			$pdf->Image('./assets/logo.png' , 20 ,5, 30 , 5,'PNG', 'http://www.tubagua.com');
			$pdf->SetFont("Arial",'',10);
			while ($row = $recibo->fetch()) {
				$getClienteid= $row[8];
				$getFormaPago=$row[11];
				$getcliente =$row[4];
				$getDocumento =$row[3];
				$getEstado = $row[9];
				$getBanco = $row[12];
				$getFecha = $row[1];
			}
			$cliente = $objCliente->obtenerDatosCliente($getClienteid);
				while ($rowcliente=$cliente->fetch()){
					$nit = $rowcliente[5];
					$codigo=$rowcliente[4];
					$direccion= $rowcliente[15];
				}
			$pdf->setX(5);
			$pdf->cell(0,10,"Cliente: " .$getcliente 	 ,0,1,'L');
			$pdf->setX(5);
			$pdf->cell(1,5,"NIT: " .$nit 	 ,0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Código: " .$codigo 	 ,0,1,'L');
			$pdf->setX(5);
			$pdf->MultiCell(0, 5, "Dirección: " .mb_convert_encoding($direccion, 'ISO-8859-1', 'UTF-8') , 0);
			
			$pdf->ln(20);
			$pdf->line(5,40,70,40);
			$pdf->setXY(5,40);
			$y=50;
			$total = 0; 
			while ($row = $detalle->fetch()) {
				$getFactura = $row[5] ." " .$row[6];
				$getMonto = $row[2];
				$pdf->setX(5);
				$pdf->cell(0,5,"Factura a pagar: " . $getFactura ."		" .number_format(round($getMonto,2),2),0,1,'L');
				$y +=5; 
				$total +=$getMonto;  
			}  
			//$pdf->line(5,$y,70,$y);
			$pdf->setX(5);
			$pdf->cell(0,5,"Pago Realizado: " . $getFormaPago,0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Banco: " . $getBanco,0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Documento " . $getDocumento,0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Fecha: " . $getFecha,0,1,'L');

			$pdf->line(5,$y+10,70,$y+10);
			$pdf->SetFont("Arial",'B',15);
			$pdf->cell(0,10,"Total 			" . number_format(round($total,2),2),0,1,'L');
			$pdf->output();

		}		
		
	}
}