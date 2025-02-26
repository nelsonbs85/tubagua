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
				$getVendedor = $row[13];
				$getRuta = $row[16];
			}
			$cliente = $objCliente->obtenerDatosCliente($getClienteid);
				while ($rowcliente=$cliente->fetch()){
					$nit = $rowcliente[5];
					$codigo=$rowcliente[4];
					$zona = " zona " .$rowcliente[16];
					$direccion= trim($rowcliente[15]) .($rowcliente[16] ? $zona : ', ');
					$departamento = $rowcliente[43];
					$municipio  = $rowcliente[50];
				    $direccion = $direccion .$municipio .", " .$departamento; 
			}
			

			$pdf->ln(4);
			$pdf->setX(5);
			
			/* CLIENTE */
			$pdf->SetFont("Arial",'B',7);
			$pdf->cell(0,5,"CLIENTE: ",0,0,'L');
			$pdf->setX(20);
			$pdf->SetFont("Arial",'',7);
			$pdf->MultiCell(50,4 ,mb_convert_encoding(trim($getcliente), 'ISO-8859-1', 'UTF-8') , 0,'L');
			$pdf->setX(5);
			/* VENDEDOR */
			$pdf->SetFont("Arial",'B',7);
			$pdf->cell(0,4,"VENDEDOR: ",0,0,'L');
			$pdf->setX(20);
			$pdf->SetFont("Arial",'',7);
			$pdf->MultiCell(50,4 ,mb_convert_encoding(trim($getVendedor), 'ISO-8859-1', 'UTF-8') , 0,'L');
			$pdf->setX(5);
				/* RUTA */
			$pdf->SetFont("Arial",'B',7);
			$pdf->cell(0,4,"RUTA: ",0,0,'L');
			$pdf->setX(20);
			$pdf->SetFont("Arial",'',7);
			$pdf->cell(1,4, $getRuta	 ,0,1,'L');
			$pdf->setX(5);
			
			/* NIT */
			$pdf->SetFont("Arial",'B',7);
			$pdf->cell(0,4,"NIT: ",0,0,'L');
			$pdf->setX(20);
			$pdf->SetFont("Arial",'',7);
			$pdf->cell(1,4, $nit 	 ,0,1,'L');
			$pdf->setX(5);
				/* CODIGO CLIENTE */
			$pdf->SetFont("Arial",'B',7);
			$pdf->cell(0,4,"CODIGO: ",0,0,'L');
			$pdf->setX(20);
			$pdf->SetFont("Arial",'',7);
			$pdf->cell(1,4, $codigo 	 ,0,1,'L');
			$pdf->setX(5);
			/* DIRECCIÃ“N */
			$pdf->SetFont("Arial",'B',7);
			$pdf->cell(0,4,"DIRECCION: ",0,0,'L');
			$pdf->setX(20);
			$pdf->SetFont("Arial",'',7);
			$pdf->MultiCell(50,4 ,mb_convert_encoding(trim($direccion), 'ISO-8859-1', 'UTF-8') , 0,'L');
			$pdf->ln(20);
			
			/*Detalle de facturas*/
			$y=80;
			$pdf->setXY(5,45);
			
			$total = 0; 
			$pdf->SetFont("Arial",'B',7);
			$pdf->cell(20,5,"Factura",1,0,'C');
			$pdf->cell(20,5,"Total",1,0,'C');
			$pdf->cell(20,5,"Saldo",1,1,'C');
			$pdf->SetFont("Arial",'',7);
			while ($row = $detalle->fetch()) {
				$getFactura = $row[5] ." " .$row[6];
				$getSaldo= $row[15]-$row[2];
				$pdf->setX(5);
				$pdf->cell(0,5,$getFactura,0,0,'L');
				//$pdf->cell(20,5,"Total",1,0,'C');
				$getMonto = $row[2];
				$pdf->setX(25);
				$pdf->cell(20,5,number_format(round($getMonto,2),2),0,0,'R');
				$pdf->setX(45);
				$pdf->cell(20,5,number_format(round($getSaldo,2),2),0,1,'R');
				$y +=5; 
				$total +=$getMonto;  
			}  
			
			$pdf->setX(5);
			$pdf->SetFont("Arial",'B',7);
				$pdf->cell(0,5,"Total:",1,0,'L');	
				$pdf->setX(25);
				$pdf->cell(20,5,number_format(round($total,2),2),0,1,'R');
				$pdf->SetFont("Arial",'',7);
				$y +=5; 
			//$pdf->line(5,$y,70,$y);
			$pdf->ln(5);
			$pdf->setX(5);
			$pdf->cell(0,5,"Pago Realizado: " . $getFormaPago,0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Banco: " . $getBanco,0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Documento " . $getDocumento,0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Fecha: " . $getFecha,0,1,'L');
			$pdf->SetFont("Arial",'B',15);
			// $pdf->cell(0,10,"Total 			" . number_format(round($total,2),2),0,1,'L');
			$pdf->output();

		}		
		
	}
}