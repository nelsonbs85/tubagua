<?php
$usuario_id = $_SESSION['id_usuario'];
// $permisos = $objPermiso->obtenerPermisos($usuario_id);
$idform =(int)$_GET["id"];
require_once './controllers/ClienteController.php';
 $objCliente = new ClienteController();
 $formularios = $objCliente->obtenerFormulario($idform);
 while ($row = $formularios->fetch()) {
  $monto = $row[2];
  $fecha = $row[3];
  $tipoFact = $row[4];
  $nitCliente = $row[5];
  $dpiRepresentanteLegal = $row[6];
  $razonSocialCliente = $row[7];
  $nombreComercial = $row[8];
  $direccionCliente = $row[9];
  $telefonoCliente = $row[10];
  $nombreRepre = $row[11];
  $direccionRepre =  $row[12];
  $ciudadRepre =  $row[13];
  $telefonoRepre =  $row[14];
  $celularRepre =  $row[15];
  $emailRepre =  $row[16];
  $nombrePagos =  $row[17];
  $telOficinaPagos =  $row[18];
  $telParticularPagos =  $row[19];
  $telCelularPagos =  $row[20];
  $emailPagos =  $row[21];
  $horarios =  ($row[22]); //json
  $exterior =  $row[23];
  $localSucursales =  $row[24];
  $localCuantos = $row[25];
  $ubicacionSucursales =  $row[26];
  $noEmpleados =  $row[27];
  $jsonHorario = json_decode($horarios,false);
  $referencias = ($row[28]);
  $jsonReferencias = json_decode($referencias,false);
  $lugarAutorizacion = $row[29];
  $fechaAutorizacion = $row[30];
  $Autorizacion = $row[31];
  $firma = $row[32];
  //var_dump($jsonHorario->{'lunesde'});
}

?>
<main role="main" class="container">
<div class="accordion" id="accordionClientes01">
<form action="index.php?page=cliente-editar" method="POST">
<!-- acordeon 1  -->
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" 
      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      
        <h4 class= "col-10">1. Datos de la Empresa Solicitante: </h4>
        <h4 class= "col-2"> <span class="badge text-bg-warning"><?php echo "Solicitud #" .$_GET["id"]; ?></span></h4>
      </button>
    </h2>
    <input type ="hidden" value =" <?php echo $idform?>" name="idform" id ="idform" >
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
        <div class="row">
          <span class="text-bg-success"><h4><strong>Solicitud de Crédito</strong></h4> </span> 
			<div class="col">
				<label>Monto Solicitado:</label>
				<input type="number" placeholder="Q.000,000" id= "monto" name="monto" value = "<?php echo number_format($monto, 2, '.', ''); ?>">
			</div>
			<div class="col">
				<label>Fecha:</label>
				<input type="date" name= "fecha" id ="fecha" value ="<?php echo $fecha ?>">
			</div>
		</div>
        <div class="row control-group container">
			<label><strong>Tipo de Facturación:</strong></label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="tipoPersona" id="tipoPersona" value="N" 
				  <?php if ($tipoFact=='N'){
							echo 'Checked';
						}
					?>
              >
				<label class="form-check-label" for="exampleRadios1">
                Persona Natural
				</label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="tipoPersona" id="TipoPersona" value="J"
			  <?php if ($tipoFact=='J'){
						echo 'Checked';
					}
				?>
			  >
			  <label class="form-check-label" for="exampleRadios2">
				Persona Jurídica
			  </label>
			</div>            
			<div class="row">
				<label class="col">NIT:</label>
				<input class="col" type="text" id="nit" name ="nit" value ="<?php echo $nitCliente ?>">
			</div>    
			<div class="row">
			  <label class="col">DPI Representante Legal:</label>
			 <input class="col" type="text" id="dpiRepre" name ="dpiRepre" value ="<?php echo $dpiRepresentanteLegal ?>">
			</div>
			<div class="row">
					<label class="col">Nombre o Razón Comercial:</label>
					<input  class= "col" type="text" id="razon" name ="razon" value ="<?php echo $razonSocialCliente ?>">
			</div>
			<div class="row">
					<label class="col">Nombre Comercial:</label>
					<input  class= "col" type="text" id="nombreComercial" name ="nombreComercial" value ="<?php echo $razonSocialCliente ?>">
			</div>
			<div class="row">
					<label class="col">Dirección:</label>
					<input  class= "col" type="text" id="direccion" name ="direccion" value ="<?php echo $direccionCliente ?>">
			</div>
			<div class="row">
					<label class="col">Teléfono:</label>
					<input  class= "col" type="text" id="tel" name ="tel" value ="<?php echo $telefonoCliente ?>">
			</div>
		</div>
          <button type="submit" class="btn btn-primary">Guardar</button>
      </div>       
    </div>
</div>
<!-- acordeon 1  -->
<!-- Acordeon 2 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h4>2. Datos del Dueño o Representante Legal</h4>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
		<div class="row control-group container">
			<div class="row">
				<label class="col-3">Nombre:</label>
				<input  class= "col-9" type="text" id="nombreRepre" name ="nombreRepre" value ="<?php echo $nombreRepre ?>">
			</div>
			<div class="row">
				<label class="col-3">Dirección:</label>
				<input  class= "col" type="text" id="dirRepre" name ="direccionRepre" value ="<?php echo $direccionRepre ?>">>
			</div>
			<div class="row">
				<label class="col-3">Ciudad:</label>
				<input  class= "col-9" type="text" id="ciudadRepre" name ="ciudadRepre" value ="<?php echo $ciudadRepre ?>">
			</div>
			<div class="row">
				<label class="col-3">Teléfono:</label>
				<input  class= "col-9" type="text" id="telRepre" name ="telefonoRepre" value ="<?php echo $telefonoRepre ?>">
			</div>    
			<div class="row">		
				<label class="col-3">Celular:</label>
				<input  class= "col-9" type="text" id="celRepre" name ="celularRepre" value ="<?php echo $celularRepre ?>">
			</div>
			<div class="row">
				<label class="col-3">Email:</label>
				<input  class= "col-9" type="email" id="emailRepre" name ="emailRepre" value ="<?php echo $emailRepre ?>">
			</div>
			<div class="row col-1">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>              
		</div>
     </div>
    </div>
 </div>
<!-- Acordeon 2 -->
<!-- acordeon 3 -->
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h4>3. Datos de la persona responsable de Pagos</h4>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
		<div class="row control-group container">
			<div class="row">
				<label class="col-4">Nombre:</label>
				<input  class= "col-8" type="text" id="nombrePagos" name ="nombrePagos" value ="<?php echo $nombrePagos ?>">
			</div>
			<div class="row">
				<label class="col-4">Tel. Oficina:</label>
				<input  class= "col-8" type="text" id="telOficinaPagos" name ="telOficinaPagos" value ="<?php echo $telOficinaPagos ?>">
			</div>
			<div class="row">
				<label class="col-4">Tel. Particular:</label>
				<input  class= "col-8" type="text" id="telParticularPagos" name ="telParticularPagos" value ="<?php echo $telParticularPagos ?>">
			</div>
			<div class="row">
				<label class="col-4">Tel. Celular:</label>
				<input  class= "col-8" type="text" id="telCelularPagos" name ="telCelularPagos" value ="<?php echo $telCelularPagos ?>">
			</div>
			<div class="row">
				<label class="col-4">Email:</label>
				<input  class= "col-8" type="text" id="emailPagos" name ="emailPagos" value ="<?php echo $emailPagos ?>">
			</div> 	
			<div class="row col-1">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>             
		</div>
      </div>
    </div>
  </div>

<!-- acordeon 3 -->
<!-- acordeon 4 -->

<!-- acordeon 4 -->
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <h4>4. Datos del Local de Venta</h4>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
       <div class="row container">
			<label >Días y horarios de atención al público:</label>
            <div class="row">
                <label class="col-3" for="">Lunes de:</label>
                <input type="time" class ="col-3" name="lunesde" id="lunesde" value="<?php echo $jsonHorario->{'lunesde'};?>">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="lunesa" id="lunesa" value="<?php echo $jsonHorario->{'lunesa'};?>">
            </div>
            <div class="row">
                <label class="col-3" for="">Martes de:</label>
                <input type="time" class ="col-3" name="martesde" id="martesde" value="<?php echo $jsonHorario->{'martesde'};?>">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="martesa" id="martesa" value="<?php echo $jsonHorario->{'martesa'};?>">
            </div>
            <div class="row">
                <label class="col-3" for="">Miércoles de:</label>
                <input type="time" class ="col-3" name="miercolesde" id="miercolesde" value="<?php echo $jsonHorario->{'miercolesde'};?>">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="miercolesa" id="miercolesa" value="<?php echo $jsonHorario->{'miercolesa'};?>">
            </div>
            <div class="row">
                <label class="col-3" for="">Jueves de:</label>
                <input type="time" class ="col-3" name="juevesde" id="juevesde" value="<?php echo $jsonHorario->{'juevesde'};?>">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="juevesa" id="juevesa" value="<?php echo $jsonHorario->{'juevesa'};?>">
            </div>
            <div class="row">
                <label class="col-3" for="">Viernes de:</label>
                <input type="time" class ="col-3" name="viernesde" id="viernesde" value="<?php echo $jsonHorario->{'viernesde'};?>">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="viernesa" id="viernesa" value="<?php echo $jsonHorario->{'viernesa'};?>">
            </div>
            <div class="row">
                <label class="col-3" for="">Sábado de:</label>
                <input type="time" class ="col-3" name="sabadode" id="sabadode" value="<?php echo $jsonHorario->{'sabadode'};?>">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="sabadoa" id="sabadoa" value="<?php echo $jsonHorario->{'sabadoa'};?>">
            </div>
            <div class="row">
                <label class="col-3" for="">Domingo de:</label>
                <input type="time" class ="col-3" name="domingode" id="domingode" value="<?php echo $jsonHorario->{'domingode'};?>">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="domingoa" id="domingoa" value="<?php echo $jsonHorario->{'domingoa'};?>">
            </div>
            <div class="row control-group container">
				<label><strong>¿Su local tiene señalamiento visible al exterior?</strong></label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="localExterior" id="localExterior" value="S" 
					  <?php if ($exterior=='S'){
								echo 'Checked';
							}
						?>
				>
				  <label class="form-check-label" for="exampleRadios1">
					Si
				  </label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="localExterior" id="localExterior" value="N"
					<?php if ($exterior=='N'){
                      echo 'Checked';
					}
					?>
					>
					<label class="form-check-label" for="exampleRadios2">
					No
					</label>
				</div>         
			</div>
			<label >No. de Empleados:	</label>
			<input class="col-2" type="number" id="noEmpleados" name ="noEmpleados" value = "<?php echo $noEmpleados?>">
			<br>
			<div class="row control-group container">
				<label><strong>¿Tiene Sucursales?
				</strong></label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="localSucursales" id="localSucursales" value="S" 
					<?php if ($localSucursales=='S'){
							  echo 'Checked';
						  }
					  ?>
					>
					<label class="form-check-label" for="exampleRadios1">
					Si
					</label>

				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="localSucursales" id="localSucursales" value="N"
					<?php if ($localSucursales=='N'){
							  echo 'Checked';
						  }
					  ?>
					>
					<label>¿Cuantos?</label>
					<input type="number" name="localCuantos" id="localCuantos" value = "<?php echo $localCuantos?>">
					<label class="form-check-label" for="exampleRadios2">
					  No
					</label>
						
					<label >Ubicación de Sucursales:	</label>
					<br>
					<textarea class="col-10" id="ubicacionsucursales" name ="ubicacionSucursales" 
					> <?php echo $ubicacionSucursales?></textarea>
				  <div class="row col-1">
				    <button type="submit" class="btn btn-primary">Guardar</button>
			  </div>
				</div>      
			</div>
		</div>
	 </div>
	</div>
</div>
<!-- acordeon 5 -->
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
       data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <h4>5. Referencias Comerciales</h4>
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse container" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
	    	<table class="table table-success table-striped-columns">
          <tbody> 
            <tr>
              <td>Empresa:</td>
              <td  width="50%" ><input class="col-12"type="text"name="emp1" id ="emp1" value="<?php echo $jsonReferencias->{'emp1'};?>"></td>
              <td>Contacto:</td>
              <td width="50%"><input class="col-12" type="text" name="cnt1" id ="cnt1" value="<?php echo $jsonReferencias->{'cnt1'};?>"></td>
            </tr>
            <tr>
              <td>Ciudad:</td>
              <td  width="50%" ><input class="col-12"type="text"name="city1" id ="city1" value="<?php echo $jsonReferencias->{'city1'};?>"></td>
              <td>Dirección:</td>
              <td width="50%"><input class="col-12" type="text" name="dir1" id ="dir1" value="<?php echo $jsonReferencias->{'dir1'};?>"></td>
            </tr>
            <tr>
              <td>Telefono:</td>
              <td  width="50%" ><input class="col-12"type="text"name="tel1" id ="tel1" value="<?php echo $jsonReferencias->{'tel1'};?>"></td>
              <td>Email:</td>
              <td width="50%"><input class="col-12" type="text" name="email1" id ="email1" value="<?php echo $jsonReferencias->{'email1'};?>"> </td>
            </tr>
            <tr><td></td></tr>
            <tr>
              <td>Empresa:</td>
              <td  width="50%" ><input class="col-12"type="text"name="emp2" id ="emp2" value="<?php echo $jsonReferencias->{'emp2'};?>"></td>
              <td>Contacto:</td>
              <td width="50%"><input class="col-12" type="text" name="cnt2" id ="cnt2" value="<?php echo $jsonReferencias->{'cnt2'};?>"></td>
            </tr>
            <tr>
              <td>Ciudad:</td>
              <td  width="50%" ><input class="col-12"type="text"name="city2" id ="city2" value="<?php echo $jsonReferencias->{'city2'};?>"></td>
              <td>Dirección:</td>
              <td width="50%"><input class="col-12" type="text" name="dir2" id ="dir2" value="<?php echo $jsonReferencias->{'dir2'};?>"></td>
            </tr>
            <tr>
              <td>Telefono:</td>
              <td  width="50%" ><input class="col-12"type="text"name="tel2" id ="tel2" value="<?php echo $jsonReferencias->{'tel2'};?>"></td>
              <td>Email:</td>
              <td width="50%"><input class="col-12" type="text" name="email2" id ="email2" value="<?php echo $jsonReferencias->{'email2'};?>"></td>
            </tr>
            <tr><td></td></tr>
            <tr>
              <td>Empresa:</td>
              <td  width="50%" ><input class="col-12"type="text"name="emp3" id ="emp3" value="<?php echo $jsonReferencias->{'emp3'};?>"></td>
              <td>Contacto:</td>
              <td width="50%"><input class="col-12" type="text" name="cnt3" id ="cnt3" value="<?php echo $jsonReferencias->{'cnt3'};?>"></td>
            </tr>
            <tr>
              <td>Ciudad:</td>
              <td  width="50%" ><input class="col-12"type="text"name="city3" id ="city3" value="<?php echo $jsonReferencias->{'city3'};?>"></td>
              <td>Dirección:</td>
              <td width="50%"><input class="col-12" type="text" name="dir3" id ="dir3" value="<?php echo $jsonReferencias->{'dir3'};?>"></td>
            </tr>
            <tr>
              <td>Telefono:</td>
              <td  width="50%" ><input class="col-12"type="text"name="tel3" id ="tel3" value="<?php echo $jsonReferencias->{'tel3'};?>"></td>
              <td>Email:</td>
              <td width="50%"><input class="col-12" type="text" name="email3" id ="email3" value="<?php echo $jsonReferencias->{'email3'};?>"></td>
            </tr>
          </tbody>
        </table>
        <div class="row col-1">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
      </div>
    </div>
  </div>

 <!-- acordeon 5 -->

 <!-- acordeon 6 -->
 <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed danger" type="button" data-bs-toggle="collapse" 
      data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        <h4>Autorización del Solicitante</h4>
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
		<div class="row control-group">
			Autorizo a TUBAGUA, S.A. a coroborar la información aquí presentada a su entera satisfacción y así
			mismo declaro que la información proporcionada en esta solicitud es verdadera
			<table class="table table-success table-striped-columns">
				<tbody>
				<thead>
					<th scope="col">Lugar y Fecha</th>
					<th scope="col">Firma</th>
				</thead>
				<tr>

					<!-- <div id="canvasDiv"></div>
					<button type="button" class="btn btn-danger" id="reset-btn">Limpiar</button>
					<button type="button" class="btn btn-success" id="btn-save">Autorizar</button>
					<input type="hidden" name="signaturesubmit" value="1">
					<form id="signatureform" action="" style="display:none" method="post">
            <input type="hidden" id="signature" name="signature">
            <input type="hidden" name="signaturesubmit" value="1">
          </form> -->
           <?php if ($Autorizacion!='A'){?>
            <form id="signatureform" action="" style="display:none" method="post">
              <td>
                <input type="text"name="lugarAutorizacion" id ="lugarAutorizacion"></br>
                <input type="date"name="fechaAutorizacion" id ="fechaAutorizacion">
              </td>
				      <td class = "col-6"> 
                  <input type="hidden" name="signaturesubmit" value="1">  
                  <canvas id="signature-pad" width="300" height="150" style="border:1px solid #000;"></canvas>
                  <button id="save-svg">Autorizar</button>
                  <textarea  id="svg-data" rows="10" cols="50" name="svg-data" readonly style="display:none"></textarea>
                  <style>
                    body {
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      justify-content: center;
                      height: 100vh;
                      margin: 0;
                      font-family: Arial, sans-serif;
                      }

                      canvas {
                          margin-bottom: 20px;
                      }

                      textarea {
                          margin-top: 20px;
                          width: 400px;
                      }
                  </style>
                  <script>
                        const canvas = document.getElementById('signature-pad');
                        const signaturePad = new SignaturePad(canvas);

                        document.getElementById('save-svg').addEventListener('click', () => {
                            const svgData = signaturePad.toDataURL('image/svg+xml');
                            document.getElementById('svg-data').value = svgData;
                        });
                  </script>
                  <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
              </td>
            </form>
            <?php 
              }else{            
            ?>
            <td>
                <input type="text"name="lugarAutorizacion" id ="lugarAutorizacion" value = "<?php echo $lugarAutorizacion ?>"></br>
                <input type="date"name="fechaAutorizacion" id ="fechaAutorizacion" value = "<?php echo $fechaAutorizacion ?>">
              
              </td>
				      <td class = "col-6"> 
                  <img src="<?php echo $firma ?>" width="300" height="150" style="border:1px solid #000;">
                  <!-- <img src="<?php echo $firma ?>" alt=""> -->
                  </canvas>  
              </td>
              
          <?php 
              }            
            ?>
</tr>
				</tbody>
			</table>
      </div>
    </div>
  </div>
 </div>
 <!-- acordeon 6 -->
  </form>
</div>
</main>