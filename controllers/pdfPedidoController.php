<?php
if (!isset($_SESSION['id_usuario'])) {
	session_start();
}

//si existe una sesion 'id usuario' y si una variable de sesion 'login' es 'ok'
if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {

	require_once './controllers/ProductoController.php';
	require_once './controllers/ClienteController.php';
	require_once './views/includes/fpdf/fpdf.php';

	class pdfPedidoController {
		public function pedidopdf(){
			if ( isset($_SESSION['id_usuario']) && $_SESSION['login'] == 'ok') {
	            require_once('./views/includes/pedidopdf.php');
	          
	        }else{
	            header('Location: index.php?page=error');
	            die();
	        }
		}
		public function creaPdf($id){

	
			$objPedido = new ProductoController;
			$objCliente = new ClienteController;
			$pedido= $objPedido->obtenerPedidoCompleto($id);
			$detalle= $objPedido->obtenerDetallePedido($id);
			$detalle2= $objPedido->obtenerDetallePedido($id);
			$pdf = new FPDF('P', 'mm', array(75,150));
			$pdf->AddPage();
			$pdf->Image('./assets/logo.png' , 20 ,5, 30 , 5,'PNG', 'http://www.tubagua.com');
			$pdf->SetFont("Arial",'',10);
			while ($row = $pedido->fetch()) {
				$getClienteid= $row[1];
				$getFormaPago=$row[2];
				$getcliente =$row[3];
				$getEstado = $row[4];
				$getFecha = $row[5];
				$getVendedor = $row[12];
				$getRuta = $row[13];
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
			$pdf->setXY(3,50);
			
			$total = 0; 
			$pdf->SetFont("Arial",'B',7);
			$pdf->cell(10,5,"Codigo",1,0,'C');
			$pdf->cell(10,5,"Cant.",1,0,'C');
			$pdf->cell(20,5,"Articulo",1,0,'C');
			$pdf->cell(15,5,"Precio",1,0,'C');
			$pdf->cell(15,5,"Subtotal",1,1,'C');
			$pdf->SetFont("Arial",'',7);
			$y = 55; 
			while ($row = $detalle->fetch()) {
				$getArticulo = $row[20];
			
				$pdf->setX(23);
				//$pdf->cell(0,5,$getArticulo,0,0,'L');
				$pdf->SetFont("Arial",'',5);
				//$pdf->setY($y);
				$pdf->MultiCell(20,3 ,mb_convert_encoding(trim($getArticulo), 'ISO-8859-1', 'UTF-8') , 1,'L');
				 
			}
			while ($rowdet = $detalle2->fetch()) {
				$getCantidad= $rowdet[5];
				$getPrecio = $rowdet[7];
				$getCodigo = $rowdet[21];
				$subtotal = $getCantidad * $getPrecio;
				$pdf->SetFont("Arial",'',5);
				$pdf->setXY(3,$y);
				$pdf->cell(10,9,$getCodigo,1,1,'C');
				$pdf->setXY(13,$y);
				$pdf->cell(10,9,$getCantidad,1,1,'C');
				$pdf->setXY(43,$y);
				$pdf->cell(15,9,number_format(round($getPrecio,2),2),1,1,'R');
				$pdf->setXY(58,$y);
				$pdf->cell(15,9,number_format(round($subtotal,2),2),1,1,'R');
				$y=$y+9; 
				$total +=$getPrecio*$getCantidad; 
				
			}  
			
			$pdf->setX(3);
			$pdf->SetFont("Arial",'B',7);
				$pdf->cell(55,5,"Total:",1,0,'L');	
				$pdf->setX(58);
				$pdf->cell(15,5,number_format(round($total,2),2),1,1,'R');
				$pdf->SetFont("Arial",'',7); 
				$pdf->setXY(3,$y+5);
			//$pdf->line(5,$y,70,$y);
/*			$pdf->ln(5);
			$pdf->setX(5);
			$pdf->cell(0,5,"Pago Realizado: " . $getFormaPago,0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Banco: " . '',0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Documento " . '',0,1,'L');
			$pdf->setX(5);
			$pdf->cell(0,5,"Fecha: " . $getFecha,0,1,'L');
			*/
			
			$pdf->cell(0,10,"(f)___________________________ ",0,1,'C');
			$pdf->cell(0,4,"Cliente",0,1,'C');
			
			$pdf->output();

		}		
		
	}
}